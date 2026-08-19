#!/usr/bin/env python3
"""Render the Features block patterns to a static page for design review.

    python3 tools/gen-preview-features.py

Writes Website Redesign/wordpress/bb-features/preview.html

The Features patterns are PHP because WordPress resolves asset URLs through
get_theme_file_uri(). This strips that back to relative paths so the result
opens straight from disk — which is how the WP build gets compared to Figma.
The section order comes from features-page.php, so a section added there is
picked up here without touching this script.
"""

import pathlib
import re
import sys

ROOT = pathlib.Path(__file__).resolve().parents[2]
THEME = ROOT / 'wordpress' / 'bb-features'
PATTERNS = THEME / 'patterns'
OUT = THEME / 'preview.html'

HEAD = """<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/features.css"><style>body{margin:0}</style>
<script>document.documentElement.classList.add('js');</script></head><body>
"""


def main() -> None:
    src = (PATTERNS / 'features-page.php').read_text()
    body = src[src.index('$bbf_sections'):src.index(');', src.index('$bbf_sections'))]
    order = re.findall(r"'([a-z0-9-]+)'", body)

    out = []
    for slug in order:
        f = PATTERNS / f'{slug}.php'
        if not f.is_file():
            sys.exit(f'gen-preview-features: {slug}.php is listed in features-page.php but missing')
        php = f.read_text()
        html = php.split('?>', 1)[1] if '?>' in php else php
        html = re.sub(r"<\?php echo esc_url\( get_theme_file_uri\( '([^']+)' \) \); \?>", r'\1', html)
        html = re.sub(r"<\?php echo esc_url\( \$bbf_img \. '([^']+)' \); \?>", r'assets/img/\1', html)
        html = re.sub(r"<\?php echo esc_url\( \$bbf_icon \. '([^']+)' \); \?>", r'assets/icon/\1', html)
        html = re.sub(r'<!-- /?wp:[^>]*-->', '', html)
        out.append(html)

    OUT.write_text(HEAD + '\n'.join(out) + '\n</body></html>\n')

    text = OUT.read_text()
    for leftover in ('<?php', '$bbf_img', '$bbf_icon'):
        if leftover in text:
            sys.exit(f'gen-preview-features: {leftover} left in the output')
    print(f'wrote {OUT.relative_to(ROOT)} ({len(text.splitlines())} lines, {len(order)} sections)')


if __name__ == '__main__':
    main()
