#!/usr/bin/env python3
"""Rewrite the header nav across every built page.

    python3 tools/nav.py            # rewrite in place
    python3 tools/nav.py --check    # report drift, change nothing

Two things live here:

  * the **Solutions** dropdown, which lists the Use Cases hub and the ten
    use-case pages, and
  * the **Preview** dropdown, the build-only index of every page that exists.

Both are generated rather than hand-copied because they appear on all pages and
the last time this chrome was edited by hand the homepage shipped marking
Features as the current page.

A page is only ever linked if its file actually exists on disk. That is the
whole point of `--check`: run the tool while the ten use-case pages are still
being built and Solutions carries just the entries that resolve, so the menu
never ships the dead links that the css/_pending-*.css references once did.
"""
import argparse
import re
import sys
from pathlib import Path

SITE = Path(__file__).resolve().parents[1] / 'website'

# (file, label) in the order the Solutions menu shows them. The hub leads, then
# the ten cards in the order the hub's grid lays them out.
SOLUTIONS = [
    ('use-cases.html', 'Use Cases'),
    ('education.html', 'Education'),
    ('online-courses.html', 'Online Courses'),
    ('brands.html', 'Brands'),
    ('faith.html', 'Faith'),
    ('social-network.html', 'Social Networks'),
    ('professional.html', 'Professional'),
    ('coaching.html', 'Coaching'),
    ('causes.html', 'Causes'),
    ('clubs-associations.html', 'Clubs &amp; Associations'),
    ('language-learning.html', 'Language Learning'),
]

# The Preview dropdown indexes the built pages. The use-case pages reach the
# user through Solutions, so only the hub is repeated here — otherwise the
# list runs to 27 entries and stops being a usable index.
PREVIEW = [
    ('index.html', 'Home'),
    ('features.html', 'Features (Top Modules)'),
    ('use-cases.html', 'Use Cases'),
    ('activity-feeds.html', 'Activity Feeds'),
    ('member-profiles.html', 'Member Profiles'),
    ('social-groups.html', 'Social Groups'),
    ('forums.html', 'Forums'),
    ('media-uploading.html', 'Media Uploading'),
    ('moderation.html', 'Moderation'),
    ('gamifications.html', 'Gamifications'),
    ('messaging.html', 'Messaging'),
    ('reactions.html', 'Like &amp; Reactions'),
    ('offload-media.html', 'Offload Media'),
    ('member-blog.html', 'Member Blog'),
    ('notifications.html', 'Notifications'),
    ('courses.html', 'Courses'),
    ('appearance.html', 'Appearance'),
]

# Pages whose file exists but which are NOT finished, so they must not be
# linked yet. brands.html stopped after row 7 when its build agent hit the
# session usage limit: hero through the third case study measure exactly right,
# but post/integrations/facts/pricing are absent, leaving it 3415 short of its
# 9293. Existence on disk is not the same as being done, and linking a
# half-page is worse than not linking it.
INCOMPLETE = {
    'brands.html': 'stops after row 7 of 11 — 5878 of 9293',
}

CARET = '<img src="assets/icon/hdr-caret.svg" alt="" aria-hidden="true">'

# Matches the Solutions nav item in either shape: the original flat anchor, or
# a dropdown this tool wrote on an earlier run. Idempotence is the point.
SOLUTIONS_RE = re.compile(
    r'[ \t]*(?:<a href="[^"]*">Solutions[^<]*<img[^>]*>\s*</a>'
    r'|<div class="navdrop navdrop--solutions">.*?</div>\s*</div>)\n',
    re.S)

PREVIEW_RE = re.compile(
    r'[ \t]*<div class="navdrop(?: navdrop--preview)?">\s*'
    r'<button[^>]*aria-controls="navPreview".*?</div>\s*</div>\n',
    re.S)


def menu(entries, page, menu_id, label, extra_class, indent='      '):
    """Render one .navdrop block, skipping entries whose file is missing."""
    live = [(f, t) for f, t in entries
            if (SITE / f).exists() and f not in INCOMPLETE]
    rows = []
    for href, text in live:
        cur = ' class="is-current"' if href == page else ''
        rows.append(f'{indent}    <a href="{href}"{cur}>{text}</a>')
    body = '\n'.join(rows)
    return (
        f'{indent}<div class="navdrop {extra_class}">\n'
        f'{indent}  <button type="button" class="navdrop__toggle" '
        f'aria-expanded="false" aria-controls="{menu_id}">\n'
        f'{indent}    {label} {CARET}\n'
        f'{indent}  </button>\n'
        f'{indent}  <div class="navdrop__menu" id="{menu_id}" hidden>\n'
        f'{body}\n'
        f'{indent}  </div>\n'
        f'{indent}</div>\n'
    ), len(live)


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument('--check', action='store_true',
                    help='report which pages would change, write nothing')
    args = ap.parse_args()

    pages = sorted(p for p in SITE.glob('*.html'))
    if not pages:
        sys.exit('nav: no pages found in website/')

    changed = []
    missing = [f for f, _ in SOLUTIONS if not (SITE / f).exists()]
    held = [f for f, _ in SOLUTIONS if f in INCOMPLETE and (SITE / f).exists()]
    for path in pages:
        src = text = path.read_text(encoding='utf-8')
        name = path.name

        sol, n_sol = menu(SOLUTIONS, name, 'navSolutions', 'Solutions',
                          'navdrop--solutions')
        text, n = SOLUTIONS_RE.subn(sol, text, count=1)
        if not n:
            print(f'  ! {name}: no Solutions nav item found', file=sys.stderr)

        prev, _ = menu(PREVIEW, name, 'navPreview', 'Preview', 'navdrop--preview')
        text, n = PREVIEW_RE.subn(prev, text, count=1)
        if not n:
            print(f'  ! {name}: no Preview dropdown found', file=sys.stderr)

        if text != src:
            changed.append(name)
            if not args.check:
                path.write_text(text, encoding='utf-8')

    verb = 'would change' if args.check else 'rewritten'
    print(f'{len(changed)}/{len(pages)} pages {verb}')
    print(f'Solutions links live: {n_sol}/{len(SOLUTIONS)}')
    if missing:
        print('  not yet built, so left out of the menu:')
        for m in missing:
            print(f'    - {m}')
    if held:
        print('  built but incomplete, so deliberately not linked:')
        for h in held:
            print(f'    - {h}  ({INCOMPLETE[h]})')
    return 0


if __name__ == '__main__':
    sys.exit(main())
