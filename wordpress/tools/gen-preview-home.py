#!/usr/bin/env python3
"""Render the homepage block patterns to a static page for design review.

    python3 tools/gen-preview-home.py

Writes Website Redesign/wordpress/bb-features/preview-home.html

The patterns are PHP because WordPress resolves asset URLs through
get_theme_file_uri(). This strips that back down to relative paths so the
result can be opened straight from disk, or served, without a WP install —
which is how the WP build gets compared against the static page and Figma.
The section order comes from hp-page.php, so a section added there is picked
up here without touching this script.

There is no header and no footer: both are template parts in WordPress and
belong to the parent theme. The hero is therefore exactly --bbh-header-h
shorter here than on the static page, which pulls itself up under the bar and
pads the space back. Every other section must match the static page exactly —
run tools/pagegeom.py over both and line the two lists up.
"""

import pathlib
import re
import sys

ROOT = pathlib.Path(__file__).resolve().parents[2]
THEME = ROOT / 'wordpress' / 'bb-features'
PATTERNS = THEME / 'patterns'
OUT = THEME / 'preview-home.html'

HEAD = """<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/home.css"><style>body{margin:0}</style>
<script>document.documentElement.classList.add('js', 'reveal-all');</script></head><body>
"""
# `js` is what the reveal start state is scoped to, so the preview has to carry
# it to reproduce the real cascade (`will-change: transform` on a revealed box
# makes it a containing block, which the layout can feel). `reveal-all` then
# forces the finished state, because nothing here loads features.js to do it —
# without it every revealed section renders at opacity 0 and the page is blank
# where it should be reviewable. Neither class moves a box.


def main() -> None:
    order = re.findall(r"'(hp-[a-z0-9-]+)'", (PATTERNS / 'hp-page.php').read_text())
    if not order:
        sys.exit('gen-preview-home: hp-page.php lists no sections')

    out = []
    for slug in order:
        f = PATTERNS / f'{slug}.php'
        if not f.is_file():
            sys.exit(f'gen-preview-home: {slug}.php is listed in hp-page.php but missing')
        php = f.read_text()
        html = php.split('?>', 1)[1] if '?>' in php else php
        # get_theme_file_uri( 'assets/img/x.png' ) and $bbh_img . 'x.png'
        html = re.sub(r"<\?php echo esc_url\( get_theme_file_uri\( '([^']+)' \) \); \?>", r'\1', html)
        html = re.sub(r"<\?php echo esc_url\( \$bbh_img \. '([^']+)' \); \?>", r'assets/img/\1', html)
        html = re.sub(r'<!-- /?wp:[^>]*-->', '', html)
        out.append(html)

    OUT.write_text(HEAD + '\n'.join(out) + '\n</body></html>\n')

    text = OUT.read_text()
    for leftover in ('<?php', '$bbh_img'):
        if leftover in text:
            sys.exit(f'gen-preview-home: {leftover} left in the output')

    missing = sorted({s for s in re.findall(r'src="([^"]+)"', text)
                      if not (THEME / s).is_file()})
    if missing:
        sys.exit('gen-preview-home: %d asset(s) referenced but not in the theme:\n  %s'
                 % (len(missing), '\n  '.join(missing)))
    print(f'wrote {OUT.relative_to(ROOT)} ({len(text.splitlines())} lines, {len(order)} sections)')


if __name__ == '__main__':
    main()
