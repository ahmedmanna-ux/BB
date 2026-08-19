#!/usr/bin/env python3
"""Render the module block patterns to a static page for design review.

    python3 tools/gen-preview.py activity-feeds member-profiles

Writes Website Redesign/wordpress/bb-features/preview-module.html

The patterns are PHP because WordPress resolves asset URLs through
get_theme_file_uri(). This strips that back down to relative paths so the
result can be opened straight from disk, or served, without a WP install —
which is how the WP build gets compared against Figma.
"""

import pathlib
import re
import sys

ROOT = pathlib.Path(__file__).resolve().parents[2]
THEME = ROOT / 'wordpress' / 'bb-features'
PATTERNS = THEME / 'patterns'
OUT = THEME / 'preview-module.html'

HEAD = """<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/module-page.css"><style>body{margin:0}</style>
<script>document.documentElement.classList.add('js');</script></head><body>
"""

PAGES = {'activity-feeds': 'af', 'social-groups': 'sg', 'forums': 'fo',
         'member-profiles': 'mp', 'moderation': 'md'}


def render(prefix: str) -> str:
    order = re.findall(r"'(%s-[a-z0-9-]+)'" % prefix, (PATTERNS / f'{prefix}-page.php').read_text())
    out = []
    for slug in order:
        php = (PATTERNS / f'{slug}.php').read_text()
        html = php.split('?>', 1)[1] if '?>' in php else php
        # get_theme_file_uri( 'assets/img/x.png' ) and $bbm_img . 'x.png'
        html = re.sub(r"<\?php echo esc_url\( get_theme_file_uri\( '([^']+)' \) \); \?>", r'\1', html)
        html = re.sub(r"<\?php echo esc_url\( \$bbm_img \. '([^']+)' \); \?>", r'assets/img/\1', html)
        html = re.sub(r'<!-- /?wp:[^>]*-->', '', html)
        out.append(html)
    return '\n'.join(out)


def main() -> None:
    pages = sys.argv[1:] or ['activity-feeds']
    bad = [p for p in pages if p not in PAGES]
    if bad:
        sys.exit('gen-preview: unknown page(s): ' + ', '.join(bad))
    body = '\n<hr style="margin:120px 0;border:0;border-top:4px dashed #ef5d33">\n'.join(
        render(PAGES[p]) for p in pages)
    OUT.write_text(HEAD + body + '\n</body></html>\n')

    text = OUT.read_text()
    if '<?php' in text or '$bbm_img' in text:
        sys.exit('gen-preview: PHP left in the output')
    print(f'wrote {OUT.relative_to(ROOT)} ({len(text.splitlines())} lines, {len(pages)} page(s))')


if __name__ == '__main__':
    main()
