#!/usr/bin/env python3
"""Generate the WordPress block patterns for a static page from its HTML.

    python3 tools/gen-patterns.py activity-feeds
    python3 tools/gen-patterns.py member-profiles
    python3 tools/gen-patterns.py home

Reads  Website Redesign/website/<page>.html
Writes Website Redesign/wordpress/bb-features/patterns/<prefix>-*.php
       plus the assembler <prefix>-page.php

Each top-level <section> of <main> becomes one pattern, built from core blocks
only (group / heading / paragraph / list / image / buttons) so an editor can
open it without a custom block plugin. Class names are the sole behaviour hook:
Gutenberg persists `className` and drops unknown data-* attributes, and an
inline style that is not derived from a block attribute fails validation.

Two page FAMILIES are generated here — the fourteen module pages and the
homepage — and they share no CSS, no tokens and no class names. Everything that
differs between them lives in a Family: the prefix every class is rewritten to,
the page-scope prefix the static build uses and this strips again, the root
class each pattern's outer group wears, the inserter category, and the two PHP
variables the generated files declare. Nothing else in this file knows which
family it is working on.

Add a family; never fork this file. The module pages are frozen output — after
any change here, regenerate all fourteen and confirm the patterns are
byte-identical before touching anything else.
"""

import re, html as ihtml, os, sys, pathlib

ROOT = pathlib.Path(__file__).resolve().parents[2]
OUT = str(ROOT / 'wordpress' / 'bb-features' / 'patterns')
VOID={'img','br','hr','source'}
# State classes belong to the front-end script, not to a page family: it sets
# them, the stylesheets match them unprefixed, so they pass through untouched.
STATE={'js','is-current','is-active'}

class Family:
    """A page family — one prefix, one scope, one inserter category.

    prefix    every class in the markup is rewritten to start with this
    strip     the static build's page prefix, dropped before `prefix` goes on
              (`mp-hero` -> `bbm-hero`), since the whole family is that page
    root      the class each pattern's outer group carries; the stylesheet
              declares its tokens there rather than on :root
    category  the pattern category the sections file under in the inserter
    var       the PHP variable stem: $<var>_img in a section, $<var>_sections
              in the assembler
    tight     index of the one section that takes `<prefix>section--tight`,
              or None. The static sheet states that gap as a sibling rule the
              patterns cannot carry, so it rides on a class instead.
    icon      the one icon file the family's stylesheet redraws inside a
              button, as a `::after`. core/button keeps plain text, so an
              <img> inside the anchor cannot survive the port — the icon has
              to come from CSS, and a button that had none in the source is
              marked `<prefix>btn--noicon` so the sheet can switch it off.
              None leaves buttons exactly as they were: label only, no class.
    uri       resolve an <img> nested inside a raw-HTML block through
              get_theme_file_uri() as well. Without it the src stays the
              static build's relative `assets/...`, which resolves against the
              post's URL in WordPress and 404s. Off for the module family only
              because turning it on there would rewrite fourteen pages of
              frozen output; those patterns have the same fault.
    """
    def __init__(self, name, prefix, strip, root, category, var,
                 assembler_title, assembler_desc, assembler_categories,
                 pages, tight=None, icon=None, uri=False):
        self.name=name; self.prefix=prefix; self.strip=strip; self.root=root
        self.category=category; self.var=var
        self.assembler_title=assembler_title; self.assembler_desc=assembler_desc
        self.assembler_categories=assembler_categories
        self.pages=pages; self.tight=tight; self.icon=icon; self.uri=uri

def classes(tag):
    m=re.search(r'\bclass="([^"]*)"',tag); return m.group(1).split() if m else []
def rename(cs,fam):
    out=[]
    for c in cs:
        if c in STATE:                 out.append(c)
        elif c.startswith(fam.strip):  out.append(fam.prefix+c[len(fam.strip):])
        else:                          out.append(fam.prefix+c)
    return out
class Node:
    def __init__(self,name=None,attrs=''):
        self.name,self.attrs,self.kids,self.text=name,attrs,[],''
def tidy(s):
    """Drop the source file's indentation, keep whitespace that is content.

    A run of spaces that carries a newline is how the static HTML is laid out
    and means nothing; a run that does not is inside one line and can be the
    only thing holding a `white-space: pre` block's indent up. Stripping both
    silently unindented two lines of the homepage's code listing."""
    return re.sub(r'\s*\n\s*$','',re.sub(r'^\s*\n\s*','',s))
def parse(s):
    root=Node('#root'); stack=[root]
    for m in re.finditer(r'<(/?)([a-zA-Z][\w-]*)([^>]*?)(/?)>|([^<]+)',s):
        close,name,attrs,sc,text=m.groups()
        if text is not None:
            if text.strip() or '\n' not in text:
                n=Node('#text'); n.text=text; stack[-1].kids.append(n)
            continue
        if close:
            if len(stack)>1: stack.pop()
        else:
            n=Node(name.lower(),attrs); stack[-1].kids.append(n)
            if not (sc or name.lower() in VOID): stack.append(n)
    return root
def attr(n,k):
    m=re.search(r'\b%s="([^"]*)"'%k,n.attrs); return m.group(1) if m else None
def cls(n,fam): return rename(classes(n.attrs),fam)
def rest_attrs(n):
    """Everything but the class attribute, in source order."""
    return re.sub(r'\bclass="[^"]*"','',n.attrs).strip()
def inner(n,fam):
    o=[]
    for k in n.kids:
        if k.name=='#text': o.append(k.text); continue
        cs=cls(k,fam); a=rest_attrs(k)
        if fam.uri and k.name=='img':
            a=re.sub(r'\bsrc="(assets/[^"]+)"',
                     lambda m: 'src="<?php echo esc_url( get_theme_file_uri( \'%s\' ) ); ?>"' % m.group(1), a)
        a=(' class="%s"'%' '.join(cs) if cs else '')+(' '+a if a else '')
        o.append('<%s%s>'%(k.name,a) if k.name in VOID else '<%s%s>%s</%s>'%(k.name,a,inner(k,fam),k.name))
    return ''.join(o)
def text_of(n):
    """Just the text, for a core/button label.

    Not `inner()` with the tags stripped: once an <img> src is resolved through
    get_theme_file_uri() the attribute itself contains `>`, and a tag-stripping
    regex walks straight through it and leaves half the PHP in the label."""
    return ''.join(k.text if k.name=='#text' else text_of(k) for k in n.kids)
def imgs(n):
    out=[]
    for k in n.kids:
        if k.name=='img': out.append(k)
        else: out.extend(imgs(k))
    return out
def src_of(n): return (attr(n,'src') or '').replace('assets/img/','').replace('assets/icon/','')
def is_icon(n): return 'assets/icon/' in (attr(n,'src') or '')
def render(node,fam,ind=1):
    t='\t'*ind; out=[]; kids=node.kids; i=0
    while i<len(kids):
        k=kids[i]; cs=' '.join(cls(k,fam)); ca=' class="%s"'%cs if cs else ''
        jc=',"className":"%s"'%cs if cs else ''
        if k.name=='#text': i+=1; continue
        if k.name=='a' and 'btn' in classes(k.attrs):
            run=[]
            while i<len(kids) and (kids[i].name=='#text' or (kids[i].name=='a' and 'btn' in classes(kids[i].attrs))):
                if kids[i].name=='a': run.append(kids[i])
                i+=1
            out.append(t+'<!-- wp:buttons -->'); out.append(t+'<div class="wp-block-buttons">')
            for b in run:
                bl=cls(b,fam)
                if fam.icon is not None:
                    found=[(attr(im,'src') or '').split('/')[-1] for im in imgs(b)]
                    odd=[f for f in found if f != fam.icon]
                    if odd:
                        sys.exit('gen-patterns: a button in %s carries %s, which the '
                                 'stylesheet does not draw — add a rule for it and '
                                 'widen Family.icon' % (page, ', '.join(sorted(set(odd)))))
                    if not found: bl=bl+[fam.prefix+'btn--noicon']
                bc=' '.join(bl); label=text_of(b).strip()
                out.append(t+'\t<!-- wp:button {"className":"%s"} -->'%bc)
                out.append(t+'\t<div class="wp-block-button %s"><a class="wp-block-button__link wp-element-button" href="%s">%s</a></div>'%(bc,attr(b,'href') or '#',label))
                out.append(t+'\t<!-- /wp:button -->')
            out.append(t+'</div>'); out.append(t+'<!-- /wp:buttons -->'); continue
        if k.name in ('section','div','article'):
            out.append(t+'<!-- wp:group {"className":"%s","layout":{"type":"default"}} -->'%cs)
            out.append(t+'<div class="wp-block-group %s">'%cs); out.append(render(k,fam,ind+1))
            out.append(t+'</div>'); out.append(t+'<!-- /wp:group -->')
        elif re.fullmatch(r'h[1-6]',k.name):
            lv=k.name[1]
            out.append(t+'<!-- wp:heading {"level":%s%s} -->'%(lv,jc))
            out.append(t+'<h%s class="wp-block-heading%s">%s</h%s>'%(lv,(' '+cs) if cs else '',tidy(inner(k,fam)),lv))
            out.append(t+'<!-- /wp:heading -->')
        elif k.name=='p':
            out.append(t+'<!-- wp:paragraph%s -->'%(' {"className":"%s"}'%cs if cs else ''))
            out.append(t+'<p%s>%s</p>'%(ca,tidy(inner(k,fam)))); out.append(t+'<!-- /wp:paragraph -->')
        elif k.name=='img' and not is_icon(k) and 'aria-hidden' not in k.attrs:
            alt=ihtml.escape(attr(k,'alt') or '',quote=True)
            out.append(t+'<!-- wp:image {"sizeSlug":"full"%s} -->'%jc)
            out.append(t+'<figure class="wp-block-image size-full%s"><img src="<?php echo esc_url( $%s_img . \'%s\' ); ?>" alt="%s"/></figure>'%((' '+cs) if cs else '',fam.var,src_of(k),alt))
            out.append(t+'<!-- /wp:image -->')
        else:
            if k.name=='img':
                folder='assets/icon/' if is_icon(k) else 'assets/img/'
                frag='<img%s src="<?php echo esc_url( get_theme_file_uri( \'%s%s\' ) ); ?>" alt="%s" %s/>'%(ca,folder,src_of(k),ihtml.escape(attr(k,'alt') or '',quote=True),'aria-hidden="true"' if 'aria-hidden' in k.attrs else '')
            else:
                # a raw-HTML block keeps the element's own attributes — unlike a
                # core group, which persists nothing but className. Dropping them
                # here cost the carousel buttons their aria-label.
                a=rest_attrs(k)
                frag='<%s%s%s>%s</%s>'%(k.name,ca,(' '+a) if a else '',inner(k,fam),k.name)
            out.append(t+'<!-- wp:html -->'); out.append(t+frag); out.append(t+'<!-- /wp:html -->')
        i+=1
    return '\n'.join(x for x in out if x.strip())

SECTION = """<?php
/**
 * Title: %(title)s
 * Slug: bb-features/%(slug)s
 * Categories: %(category)s
 * Description: %(desc)s
 *
 * @package BB_Features
 */

$%(var)s_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"%(cs)s","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull %(cs)s">
%(body)s
</div>
<!-- /wp:group -->
"""

ASSEMBLER = """<?php
/**
 * Title: %(title)s
 * Slug: bb-features/%(slug)s-page
 * Categories: %(categories)s
 * Block Types: core/post-content
 * Description: %(desc)s
 *
 * @package BB_Features
 */

$%(var)s_sections = array(
%(rows)s
);

foreach ( $%(var)s_sections as $%(var)s_section ) {
\t$%(var)s_file = __DIR__ . '/' . $%(var)s_section . '.php';

\tif ( is_readable( $%(var)s_file ) ) {
\t\trequire $%(var)s_file;
\t}
}
"""

def build(sec_html,slug,title,desc,fam,extra=()):
    sec=parse(sec_html).kids[0]
    cs=' '.join([fam.root]+cls(sec,fam)+list(extra))
    return SECTION % {'title':title,'slug':slug,'category':fam.category,'desc':desc,
                      'var':fam.var,'cs':cs,'body':render(sec,fam,1)}

MODULE_PAGES = {
 'activity-feeds': ('af', 'Activity Feeds', [
  ('hero','Module — Activity Feeds hero','Peach hero with the headline, two CTAs, product artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('discover','Module — Discover','Section head plus six feature cards: a split, two pairs, and a full-width card.'),
  ('cta-1','Module — CTA band (Discover)','Dark full-width CTA band.'),
  ('post','Module — Post','Section head, three split cards and a row of three mini cards.'),
  ('cta-2','Module — CTA band (Post)','Dark full-width CTA band.'),
  ('engage','Module — Engage','Section head, two pairs of cards and a split.'),
  ('cta-3','Module — CTA band (Engage)','Dark full-width CTA band.'),
  ('control','Module — Control','Section head and two split cards, artwork alternating side.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'social-groups': ('sg', 'Social Groups', [
  ('hero','Module — Social Groups hero','Peach hero with the headline, two CTAs, groups artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('create','Module — Create','Section head and three split cards on group creation, group messaging and cover sizes.'),
  ('identity','Module — Identity','Section head, a duo on default avatars and covers, then splits on header style, header elements and directory layout.'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('discover','Module — Discover','Section head and three split cards on the group directory.'),
  ('manage','Module — Manage','Section head and three split cards on who creates, who joins and group types.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'forums': ('fo', 'Forums', [
  ('hero','Module — Forums hero','Peach hero with the headline, two CTAs, forum artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('discuss','Module — Discuss','Section head and the cards on starting boards and conversations.'),
  ('features','Module — Forum features','Section head and five cards: favorites, discussion tags, the revision log, search and post formatting.'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('groups','Module — Groups and URLs','Section head and the cards on where boards live and how they are addressed.'),
  ('manage','Module — Manage','Section head and the cards on edit windows, throttles, page sizes and the wp-admin list.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'media-uploading': ('mu', 'Media Uploading', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('photos','Module — Photos','Every picture in its place'),
  ('cta-1','Module — CTA band','Dark full-width CTA band.'),
  ('documents','Module — Documents','A file system inside your community'),
  ('emoji','Module — Emoji','Say it with more than words'),
  ('cta-2','Module — CTA band','Dark full-width CTA band.'),
  ('security','Module — Security','Fast for members, locked for everyone else'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'gamifications': ('ga', 'Gamifications', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('points','Module — Points','Give every action a value'),
  ('achievements','Module — Achievements','Every badge has a story behind it'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('ranks','Module — Ranks','Levels that unlock more'),
  ('recognition','Module — Recognition','Recognition everywhere members look'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'messaging': ('ms', 'Messaging', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('discover','Module — Discover','Every messaging feature card: four full-width splits, a pair, and the access card.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'reactions': ('lr', 'Like & Reactions', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('react','Module — React','Every reactions feature card: three full-width splits and a pair.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'offload-media': ('om', 'Offload Media', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('discover','Module — Discover','Every offload feature card: four full-width splits and a pair.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'member-blog': ('mb', 'Member Blog', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('write','Module — Write','A block editor built into the community'),
  ('publish','Module — Publish','Approval, scheduling, and where a post lands'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('read','Module — Read','A directory the community actually browses'),
  ('control','Module — Control','Who can post, and what they must fill in'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'notifications': ('nt', 'Notifications', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('discover','Module — Discover','Every notifications feature card: six full-width splits and two pairs.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'courses': ('co', 'Courses', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('discover','Module — Discover','Find the course before you commit to it'),
  ('choose','Module — Choose','Approval, scheduling, and where a post lands'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('learn','Module — Learn','Once they are in, the page changes.'),
  ('connect','Module — Connect','Learning sits beside everything else'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'appearance': ('ap', 'Appearance', [
  ('hero','Module — hero','Peach hero with the headline, two CTAs, artwork and the two background shapes.'),
  ('buddyboss-theme','Module — Buddyboss Theme','A premium theme for deep design control'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('readylaunch','Module — Readylaunch','The interface that ships with the Platform'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'moderation': ('md', 'Moderation', [
  ('hero','Module — Moderation hero','Peach hero with the headline, two CTAs, feed artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('protect','Module — Protect','Section head, a pair, a split card, then a left-aligned sub-head over a nine-card grid of reportable content types.'),
  ('define','Module — Define','Section head and two split cards on reporting categories.'),
  ('cta','Module — CTA band','Dark full-width CTA band.'),
  ('automate','Module — Automate','Section head, a pair and a split on auto hide, auto suspend and the alert that follows.'),
  ('resolve','Module — Resolve','Section head and three split cards on flagged members and reported content.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
 'member-profiles': ('mp', 'Member Profiles', [
  ('hero','Module — Member Profiles hero','Peach hero with the headline, two CTAs, profile artwork and the two background shapes.'),
  ('jumpcards','Module — Jump cards','Four numbered cards summarising the sections below.'),
  ('identity','Module — Identity','Section head plus seven cards covering profile headers, fields, types, links, names and navigation.'),
  ('cta-1','Module — CTA band (Identity)','Dark full-width CTA band.'),
  ('directory','Module — Discover','Section head and three split cards covering the member directory.'),
  ('cta-2','Module — CTA band (Discover)','Dark full-width CTA band.'),
  ('connect','Module — Connect','Section head, a split, a pair and a closing split on connections and invites.'),
  ('cta-3','Module — CTA band (Connect)','Dark full-width CTA band.'),
  ('control','Module — Control','Section head, a pair, a full-width card and three mini cards on privacy and permissions.'),
  ('reviews','Module — Review masonry','Peach band with three columns of customer reviews.'),
  ('cta-big','Module — Closing CTA','Tall centred CTA band that closes the page.'),
  ('explore','Module — Explore more modules','Three cards linking on to the other module pages.'),
 ]),
}

HOME_PAGES = {
 'home': ('hp', 'Home', [
  ('hero','Home — Hero','Peach hero: eyebrow, headline, lede, the two CTAs and the review-platform chips, over the glow and the clipped product collage.'),
  ('logowall','Home — Logo wall','Centred heading over one wrapping row of customer and university logos.'),
  ('bento1','Home — Community bento','COMMUNITY FEATURES head over the seven-tile bento: activity feed, member profile, social groups, forums, moderation, private messaging and reactions.'),
  ('courses','Home — Courses split','Green split: the Courses chapter head, the feature list and the course artwork panel.'),
  ('memberships','Home — Memberships split','Peach split: the Memberships chapter head, the feature list and the plans artwork panel.'),
  ('review-1','Home — Video review 1','Full-width customer quote: video portrait with a play badge, the quote mark, the quote and the reviewer credit.'),
  ('gamification','Home — Gamification split','Blue split: points, achievements and ranks blocks beside the gamification artwork panel.'),
  ('facts','Home — What you pay per member','The $0-per-member card and its five no-limit tiles — members, admins, groups, events and courses.'),
  ('bento2','Home — Who it is for','WHO IT IS FOR head over the ten-community carousel: the card track, its dots and the prev/next pair.'),
  ('review-2','Home — Video review 2','The roomy variant of the video-review band.'),
  ('migration','Home — Migration','MIGRATION head over the platform map — Circle, Skool, Mighty Networks, Kajabi, BuddyPress and the rest wired in to the BuddyBoss mark.'),
  ('app','Home — Mobile app band','Dark gradient band: the white-label app card with its check list and store marks, beside the phone artwork and its dots.'),
  ('integrations','Home — Integrations','INTEGRATIONS head over the ruled two-row logo grid, closed by the full-width CTA.'),
  ('themerl','Home — Done for you','DONE FOR YOU head over the Web DFY and App DFY cards.'),
  ('review-3','Home — Video review 3','Full-width customer quote: video portrait with a play badge, the quote mark, the quote and the reviewer credit.'),
  ('difference','Home — The difference','THE DIFFERENCE head over the four-way comparison table: Facebook & Discord, hosted platforms, WordPress plugins and BuddyBoss.'),
  ('bento3','Home — Built your way','BUILT YOUR WAY head over the freedom bento: drag & drop editors, appearance options, data & privacy and custom development.'),
  ('testimonials','Home — Testimonials','Peach band: the 65,000-customer headline, the three expert cards and the three-column review masonry.'),
  ('pricing','Home — Pricing','Closing pricing row: the head beside the BuddyBoss Web and BuddyBoss App plan cards.'),
 ]),
}

MODULE = Family(
    name='module', prefix='bbm-', strip='mp-', root='bbm',
    category='bb-module-pages', var='bbm',
    assembler_title='Module — %s full page',
    assembler_desc='The whole %s module page, section by section.',
    assembler_categories='bb-module-pages, pages',
    pages=MODULE_PAGES,
    # the static sheet expresses the hero -> jump-cards gap as
    # `.mp main > .mp-hero + .section`; a pattern has no siblings to match on
    # at author time, so the tighter rhythm rides on a class instead
    tight=1)

HOME = Family(
    name='home', prefix='bbh-', strip='hp-', root='bbh',
    category='bb-home', var='bbh',
    assembler_title='%s — full page',
    assembler_desc='The whole BuddyBoss %s page, section by section.',
    assembler_categories='bb-home, pages',
    pages=HOME_PAGES,
    icon='arrow-right.svg',
    uri=True)

FAMILIES = (MODULE, HOME)

page = sys.argv[1] if len(sys.argv) > 1 else 'activity-feeds'
fam = next((f for f in FAMILIES if page in f.pages), None)
if fam is None:
    sys.exit('gen-patterns: unknown page %r — try one of %s'
             % (page, ', '.join(p for f in FAMILIES for p in f.pages)))
SLUG_PFX, PAGE_TITLE, META = fam.pages[page]
# the homepage's file is index.html, since it is the site root; every other
# page's file matches its key
SRC_FILE = {'home': 'index'}
SRC = str(ROOT / 'website' / (SRC_FILE.get(page, page) + '.html'))

html=open(SRC).read()
m_main = re.search(r'<main\b[^>]*>', html)
if not m_main:
    sys.exit('gen-patterns: %s has no <main>' % page)
body = html[m_main.end():html.index('</main>')]
# a page-scope class on <main> has no counterpart in Gutenberg, so it rides on
# every section's root group instead — that is what the page-scoped CSS hangs off
m_scope = re.search(r'class="(%s[a-z]{2})"' % re.escape(fam.strip), m_main.group(0))
PAGE_SCOPE = (fam.prefix + m_scope.group(1)[len(fam.strip):],) if m_scope else ()
depth=0; start=None; sections=[]
for m in re.finditer(r'<(/?)section\b[^>]*>',body):
    if m.group(1)=='':
        if depth==0: start=m.start()
        depth+=1
    else:
        depth-=1
        if depth==0: sections.append(body[start:m.end()])
if len(sections) != len(META):
    sys.exit('gen-patterns: %s has %d sections but %d are described — update PAGES'
             % (page, len(sections), len(META)))

slugs=[]
for i,(sec,(name,title,desc)) in enumerate(zip(sections,META)):
    slug='%s-%s'%(SLUG_PFX,name); slugs.append(slug)
    extra=PAGE_SCOPE + ((fam.prefix+'section--tight',) if i==fam.tight else ())
    open(os.path.join(OUT,slug+'.php'),'w').write(build(sec,slug,title,desc,fam,extra))

open(os.path.join(OUT,'%s-page.php'%SLUG_PFX),'w').write(ASSEMBLER % {
    'title': fam.assembler_title % PAGE_TITLE,
    'slug': SLUG_PFX,
    'categories': fam.assembler_categories,
    'desc': fam.assembler_desc % PAGE_TITLE,
    'var': fam.var,
    'rows': '\n'.join("\t'%s',"%s for s in slugs),
})
print('regenerated %d patterns + %s-page.php for %s'%(len(META),SLUG_PFX,page))
