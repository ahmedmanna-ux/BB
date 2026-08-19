#!/usr/bin/env python3
"""Draft a gen-patterns.py PAGES entry from a built module page.

    python3 tools/scaffold-page-entry.py social-groups sg "Social Groups"

Reads  Website Redesign/website/<page>.html
Prints a PAGES entry to stdout, ready to paste into gen-patterns.py.

gen-patterns.py refuses to run unless the entry describes exactly as many
sections as the page has, and the order has to match. Writing that by hand from
a page with a dozen sections is where the mistakes live, so this reads the
sections back off the built markup instead: one line per top-level <section> of
<main>, named from its own class list and titled from its heading.

The slugs and descriptions it guesses are a starting point — read them and fix
the ones that are wrong before pasting. It is a scaffold, not an oracle.
"""

import html
import pathlib
import re
import sys

ROOT = pathlib.Path(__file__).resolve().parents[2]

# section class -> (slug, title, description) for the parts every module page
# shares. Anything not in here gets its slug from its own page-prefixed class.
SHARED = {
    'mp-hero':     ('hero',     'hero',                  'Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
    'jumpcards':   ('jumpcards','Jump cards',            'Four numbered cards summarising the sections below.'),
    'mp-reviews':  ('reviews',  'Review masonry',        'Peach band with three columns of customer reviews.'),
    'ctabig':      ('cta-big',  'Closing CTA',           'Tall centred CTA band that closes the page.'),
    'modcards':    ('explore',  'Explore more modules',  'Three cards linking on to the other module pages.'),
    'ctaband':     ('cta',      'CTA band',              'Dark full-width CTA band.'),
}


def sections(markup: str):
    body = markup[re.search(r'<main\b[^>]*>', markup).end():markup.index('</main>')]
    depth, start, out = 0, None, []
    for m in re.finditer(r'<(/?)section\b[^>]*>', body):
        if m.group(1) == '':
            if depth == 0:
                start = m.start()
            depth += 1
        else:
            depth -= 1
            if depth == 0:
                out.append(body[start:m.end()])
    # the hero is a <section> on some pages and a bare div on others
    hero = re.search(r'<(section|div) class="mp-hero"', body)
    if hero and not out[0].startswith('<section class="mp-hero'):
        out.insert(0, body[hero.start():hero.start() + 400])
    return out


def slugify(text: str) -> str:
    # unescape first, or `Groups &amp; URLs` slugs as `groups-amp-urls`
    text = html.unescape(text).replace('&', ' and ')
    return re.sub(r'[^a-z0-9]+', '-', text.lower()).strip('-')[:24] or 'section'


def describe(sec: str, prefix: str):
    """Name a section from the component it CONTAINS, not from its own classes.

    The shared components sit inside the `<section class="shell section">`
    wrapper rather than on it, so matching only the root class list names every
    band 'section' — which then collides once gen-patterns writes the files.
    """
    heading = re.search(
        r'(?:secthead__title|ctabig__title|ctaband__title|mp-hero__title|h2 class="h[23]")[^>]*>([^<]{0,70})', sec)
    title = heading.group(1).strip() if heading else ''

    root = re.search(r'class="([^"]*)"', sec).group(1).split()
    for c in root:
        if c in SHARED:
            return SHARED[c] + (title,)

    # the closing CTA is a centred variant of the same band, not a distinct
    # component, so it has to be tested before the band itself
    if 'ctaband--center' in sec or re.search(r'class="[^"]*\bctabig\b', sec):
        return SHARED['ctabig'] + (title,)

    # then the components nested inside it, longest class first so `.mp-reviews`
    # is preferred over a bare `.reviews` if both ever appear
    for key in sorted(SHARED, key=len, reverse=True):
        if re.search(r'class="[^"]*\b%s\b' % re.escape(key), sec):
            return SHARED[key] + (title,)

    # a content chapter: name it from its eyebrow, which is short and is what
    # the design calls the chapter — the headline is a sentence and makes an
    # unusable slug
    named = [c for c in root if c.startswith(prefix + '-')]
    eyebrow = re.search(r'class="tag"><span>([^<]{0,40})', sec)
    if named:
        slug = named[0][len(prefix) + 1:]
    elif eyebrow:
        slug = slugify(eyebrow.group(1))
    else:
        slug = slugify(title)
    return (slug, slug.replace('-', ' ').title(),
            title or 'Section head and its feature cards.', title)


def main() -> None:
    if len(sys.argv) < 4:
        sys.exit(__doc__)
    page, prefix, label = sys.argv[1], sys.argv[2], sys.argv[3]
    src = ROOT / 'website' / f'{page}.html'
    if not src.is_file():
        sys.exit(f'scaffold-page-entry: {src} not found — build the page first')

    secs = sections(src.read_text())
    rows = [describe(sec, prefix) for sec in secs]

    # A page with two CTA bands yields the same slug twice, and gen-patterns
    # names its files from the slug — the second would silently overwrite the
    # first. Number any slug that repeats, the way the hand-written
    # activity-feeds entry already does with cta-1 / cta-2.
    counts = {}
    for slug, *_ in rows:
        counts[slug] = counts.get(slug, 0) + 1
    seen = {}
    numbered = []
    for slug, name, desc, title in rows:
        if counts[slug] > 1:
            seen[slug] = seen.get(slug, 0) + 1
            slug = f'{slug}-{seen[slug]}'
        numbered.append((slug, name, desc, title))

    print(f" '{page}': ('{prefix}', '{label}', [")
    for slug, name, desc, title in numbered:
        if title and desc != title:
            desc = f'{desc} ({title})' if not desc.endswith('.') else desc
        print(f"  ('{slug}','Module — {name}','{desc}'),")
    print(' ]),')
    print(f'\n# {len(secs)} sections. Check every slug and description before pasting.',
          file=sys.stderr)


if __name__ == '__main__':
    main()
