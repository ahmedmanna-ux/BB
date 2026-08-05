#!/usr/bin/env python3
"""Generate the WordPress module-page stylesheet from the static one.

    python3 tools/gen-module-css.py

Reads  Website Redesign/website/css/style.css
Writes Website Redesign/wordpress/bb-features/assets/css/module-page.css

The two must never drift, so the WP sheet is derived rather than maintained.
The transform is:

  * every class gets a `bbm-` prefix, and the `mp-` page prefix is dropped
    (`.mp-hero` -> `.bbm-hero`) since the whole sheet is already module-only;
  * every custom property gets a `--bbm-` prefix, so it cannot collide with
    the Features sheet or with a parent theme;
  * `:root` and `body` both become `.bbm`, the class every pattern's root
    group carries — the tokens are declared there rather than globally;
  * bare element selectors in the reset are scoped and wrapped in `:where()`
    so a later single-class component rule still outranks them (a `.bbm h3`
    at (0,1,1) silently eats a `.bbm-title` margin — this cost the module
    grid 4px a row once already);
  * page-level rules that assume the static page's DOM (`.mp main > .section`)
    become flat classes the pattern markup can carry.

Only the shared foundation and the module-page component block are carried
over; everything belonging to the Features page is dropped.
"""

import re
import pathlib
import sys

ROOT = pathlib.Path(__file__).resolve().parents[2]
SRC = ROOT / 'website' / 'css' / 'style.css'
OUT = ROOT / 'wordpress' / 'bb-features' / 'assets' / 'css' / 'module-page.css'

HEADER = """/* =============================================================
   BB Features — module page sections
   Built from Figma: BuddyBoss-Website / Activity Feed / 1886:10326
                                       / Member Profiles / 2268:44480

   GENERATED — do not edit. Run wordpress/tools/gen-module-css.py after
   changing website/css/style.css.

   Everything is prefixed bbm- and every token is declared on .bbm, so it
   neither reads from nor leaks into the Features styles.
   ============================================================= */
"""

# Section banners in style.css that mark the start of each block we keep.
# Each entry is (start marker, end marker) — end is exclusive.
KEEP = [
    (':root {', '/* ---------- reset'),
    ('/* ---------- reset', '/* =================================================================\n   HEADER'),
    ('/* =================================================================\n   SCROLL ANIMATIONS',
     '/* =================================================================\n   ICON METRICS'),
    ('/* =================================================================\n   MODULE PAGE', None),
]

# Classes the theme script owns; they are set on <html>, outside any pattern.
PASSTHROUGH = {'js', 'reveal-all', 'bbm'}

# Element selectors in the reset that need scoping.
ELEMENTS = ['img, svg', 'p, figure, blockquote, dl, dd', 'h1,h2,h3,h4,h5,h6', 'ul', 'a', 'button']

# Rules that depend on the static page's document structure. Gutenberg has no
# <main> and no page-level body class to hang these off, so each becomes a
# class the pattern markup applies directly.
STRUCTURAL = {
    '.mp main > .section': '.bbm-section',
    '.mp main > .mp-hero + .section': '.bbm-section--tight',
    '.mp .site-footer': '.bbm-site-footer',
}


def slice_source(css: str) -> str:
    out = []
    for start, end in KEEP:
        i = css.find(start)
        if i < 0:
            sys.exit(f'gen-module-css: marker not found: {start!r}')
        j = css.find(end, i) if end else len(css)
        if end and j < 0:
            sys.exit(f'gen-module-css: end marker not found: {end!r}')
        out.append(css[i:j].rstrip() + '\n')
    return '\n'.join(out)


# Section rhythm at each breakpoint. The static sheet expresses these as bare
# `.section` overrides inside media queries that are otherwise all Features-page
# layout; only the token block and the rhythm belong to the module sheet.
SECTION_STEPS = {1024: '96px', 720: '72px'}


def token_steps(css: str) -> str:
    """The responsive token overrides, pulled out of the Features media queries.

    Those queries mostly reflow the Features page, so the whole block cannot be
    carried across — only the `:root` declarations inside them, plus the
    section rhythm each breakpoint sets.
    """
    out = []
    for m in re.finditer(r'@media \((max-width): (\d+)px\) \{\n(.*?)\n\}\n', css, re.S):
        _, width, body = m.groups()
        root = re.search(r'^\s*:root \{(.*?)\}', body, re.S | re.M)
        if not root:
            continue
        decls = ' '.join(l.strip() for l in root.group(1).strip().splitlines())
        lines = [f'@media (max-width: {width}px) {{', f'  :root {{ {decls} }}']
        if int(width) in SECTION_STEPS:
            lines.append(f'  .section {{ margin-top: {SECTION_STEPS[int(width)]}; }}')
        lines.append('}')
        out.append('\n'.join(lines) + '\n')
    return ''.join(out)


def transform(css: str) -> str:
    # Comments are full of `--------` rules and `.class` mentions; hide them
    # so neither substitution below can chew through a banner.
    comments: list[str] = []

    def stash(m):
        comments.append(m.group(0))
        return '\x00%d\x00' % (len(comments) - 1)

    css = re.sub(r'/\*.*?\*/', stash, css, flags=re.S)

    # --- custom properties -------------------------------------------------
    css = re.sub(r'(?<![\w-])--(?!bbm-)([a-z0-9-]+)', r'--bbm-\1', css)

    # --- structural rules --------------------------------------------------
    for old, new in STRUCTURAL.items():
        css = css.replace(old, new)

    # --- the hero's header overlap is opt-in under WordPress ---------------
    css = css.replace(
        """.mp-hero {
  position: relative; overflow: hidden; background: var(--bbm-bg-brand-subtle);
  margin-top: calc(-1 * var(--bbm-header-h));
  padding-top: var(--bbm-header-h);
}""",
        """.mp-hero {
  position: relative; overflow: hidden; background: var(--bbm-bg-brand-subtle);
}
/* opt-in: transparent header in the parent theme, then add this to the hero */
.mp-hero--under-header {
  margin-top: calc(-1 * var(--bbm-header-h));
  padding-top: var(--bbm-header-h);
}""")

    # --- classes -----------------------------------------------------------
    def cls(m):
        name = m.group(1)
        # `js` and `reveal-all` are set on <html> by the theme script, and the
        # is-* state classes are shared with it — those stay unprefixed.
        if name in PASSTHROUGH or name.startswith(('bbm-', 'wp-', 'is-')):
            return '.' + name
        if name.startswith('mp-'):
            return '.bbm-' + name[3:]
        return '.bbm-' + name
    css = re.sub(r'\.([a-zA-Z][\w-]*)', cls, css)

    # `.mp X` was the page scope; under WP the pattern root already carries
    # .bbm, so the scope class is just .bbm.
    css = re.sub(r'\.bbm-mp(?=[\s.:,])', '.bbm', css)

    # --- roots -------------------------------------------------------------
    css = css.replace(':root {', '.bbm {')
    css = re.sub(r'^body \{', '.bbm {', css, flags=re.M)
    css = css.replace('*, *::before, *::after { box-sizing: border-box; }',
                      '.bbm, .bbm *, .bbm *::before, .bbm *::after { box-sizing: border-box; }')
    # the html rule is document-level; a block pattern has no business setting it
    css = re.sub(r'^html \{[^}]*\}\n', '', css, flags=re.M)
    css = re.sub(r'^ +html \{[^}]*\}\n', '', css, flags=re.M)

    # --- reset element selectors ------------------------------------------
    for sel in ELEMENTS:
        css = re.sub(r'^%s (?=\{)' % re.escape(sel), '.bbm :where(%s) ' % sel, css, flags=re.M)
    css = re.sub(r'^:focus-visible ', '.bbm :focus-visible ', css, flags=re.M)

    # --- restore comments, with their own class references renamed ---------
    def restore(m):
        c = comments[int(m.group(1))]
        c = re.sub(r'\.mp-([a-z][\w-]*)', r'.bbm-\1', c)
        # token names cited in prose, but never the `------` banner rules
        c = re.sub(r'(?<![\w-])--(?![-\s])(?!bbm-)([a-z][\w-]*)', r'--bbm-\1', c)
        return c

    return re.sub(r'\x00(\d+)\x00', restore, css)


def main() -> None:
    css = SRC.read_text()
    body = transform(slice_source(css))
    steps = transform(token_steps(css))
    OUT.write_text(HEADER + body.rstrip() + '\n\n/* ---------- token steps ------------------------------------------ */\n' + steps.rstrip() + '\n')

    # Sanity checks — a silent bad substitution here is expensive to find later.
    # Run them on the code alone; comment prose is checked separately above.
    text = re.sub(r'/\*.*?\*/', '', OUT.read_text(), flags=re.S)
    problems = []
    if '.bbm-bbm' in text:
        problems.append('double-prefixed class (.bbm-bbm)')
    if re.search(r'(?<![\w-])--(?!bbm-)[a-z]', text):
        problems.append('unprefixed custom property')
    stray = {m.group(1) for m in re.finditer(r'^\s*\.([a-z][\w-]*)', text, re.M)
             if m.group(1) not in PASSTHROUGH and not m.group(1).startswith(('bbm', 'is-'))}
    if stray:
        problems.append('unprefixed classes: ' + ', '.join(sorted(stray)))
    if text.count('{') != text.count('}'):
        problems.append('unbalanced braces')
    if problems:
        sys.exit('gen-module-css: ' + '; '.join(problems))
    print(f'wrote {OUT.relative_to(ROOT)} ({len(text.splitlines())} lines)')


if __name__ == '__main__':
    main()
