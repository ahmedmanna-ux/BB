#!/usr/bin/env python3
"""Generate the WordPress block patterns for a module page from its static HTML.

    python3 tools/gen-patterns.py activity-feeds
    python3 tools/gen-patterns.py member-profiles

Reads  Website Redesign/website/<page>.html
Writes Website Redesign/wordpress/bb-features/patterns/<prefix>-*.php
       plus the assembler <prefix>-page.php

Each top-level <section> of <main> becomes one pattern, built from core blocks
only (group / heading / paragraph / list / image / buttons) so an editor can
open it without a custom block plugin. Class names are the sole behaviour hook:
Gutenberg persists `className` and drops unknown data-* attributes, and an
inline style that is not derived from a block attribute fails validation.
"""

import re, html as ihtml, os, sys, pathlib

ROOT = pathlib.Path(__file__).resolve().parents[2]
OUT = str(ROOT / 'wordpress' / 'bb-features' / 'patterns')
PFX = 'bbm-'
VOID={'img','br','hr','source'}
def classes(tag):
    m=re.search(r'\bclass="([^"]*)"',tag); return m.group(1).split() if m else []
def rename(cs):
    out=[]
    for c in cs:
        if c in ('js','is-current'): out.append(c)
        elif c.startswith('mp-'):    out.append(PFX+c[3:])
        else:                        out.append(PFX+c)
    return out
class Node:
    def __init__(self,name=None,attrs=''):
        self.name,self.attrs,self.kids,self.text=name,attrs,[],''
def parse(s):
    root=Node('#root'); stack=[root]
    for m in re.finditer(r'<(/?)([a-zA-Z][\w-]*)([^>]*?)(/?)>|([^<]+)',s):
        close,name,attrs,sc,text=m.groups()
        if text is not None:
            if text.strip():
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
def cls(n): return rename(classes(n.attrs))
def inner(n):
    o=[]
    for k in n.kids:
        if k.name=='#text': o.append(k.text); continue
        cs=cls(k); a=re.sub(r'\bclass="[^"]*"','',k.attrs).strip()
        a=(' class="%s"'%' '.join(cs) if cs else '')+(' '+a if a else '')
        o.append('<%s%s>'%(k.name,a) if k.name in VOID else '<%s%s>%s</%s>'%(k.name,a,inner(k),k.name))
    return ''.join(o)
def src_of(n): return (attr(n,'src') or '').replace('assets/img/','').replace('assets/icon/','')
def is_icon(n): return 'assets/icon/' in (attr(n,'src') or '')
def render(node,ind=1):
    t='\t'*ind; out=[]; kids=node.kids; i=0
    while i<len(kids):
        k=kids[i]; cs=' '.join(cls(k)); ca=' class="%s"'%cs if cs else ''
        jc=',"className":"%s"'%cs if cs else ''
        if k.name=='#text': i+=1; continue
        if k.name=='a' and 'btn' in classes(k.attrs):
            run=[]
            while i<len(kids) and (kids[i].name=='#text' or (kids[i].name=='a' and 'btn' in classes(kids[i].attrs))):
                if kids[i].name=='a': run.append(kids[i])
                i+=1
            out.append(t+'<!-- wp:buttons -->'); out.append(t+'<div class="wp-block-buttons">')
            for b in run:
                bc=' '.join(cls(b)); label=re.sub(r'<[^>]+>','',inner(b)).strip()
                out.append(t+'\t<!-- wp:button {"className":"%s"} -->'%bc)
                out.append(t+'\t<div class="wp-block-button %s"><a class="wp-block-button__link wp-element-button" href="%s">%s</a></div>'%(bc,attr(b,'href') or '#',label))
                out.append(t+'\t<!-- /wp:button -->')
            out.append(t+'</div>'); out.append(t+'<!-- /wp:buttons -->'); continue
        if k.name in ('section','div','article'):
            out.append(t+'<!-- wp:group {"className":"%s","layout":{"type":"default"}} -->'%cs)
            out.append(t+'<div class="wp-block-group %s">'%cs); out.append(render(k,ind+1))
            out.append(t+'</div>'); out.append(t+'<!-- /wp:group -->')
        elif re.fullmatch(r'h[1-6]',k.name):
            lv=k.name[1]
            out.append(t+'<!-- wp:heading {"level":%s%s} -->'%(lv,jc))
            out.append(t+'<h%s class="wp-block-heading%s">%s</h%s>'%(lv,(' '+cs) if cs else '',inner(k).strip(),lv))
            out.append(t+'<!-- /wp:heading -->')
        elif k.name=='p':
            out.append(t+'<!-- wp:paragraph%s -->'%(' {"className":"%s"}'%cs if cs else ''))
            out.append(t+'<p%s>%s</p>'%(ca,inner(k).strip())); out.append(t+'<!-- /wp:paragraph -->')
        elif k.name=='img' and not is_icon(k) and 'aria-hidden' not in k.attrs:
            alt=ihtml.escape(attr(k,'alt') or '',quote=True)
            out.append(t+'<!-- wp:image {"sizeSlug":"full"%s} -->'%jc)
            out.append(t+'<figure class="wp-block-image size-full%s"><img src="<?php echo esc_url( $bbm_img . \'%s\' ); ?>" alt="%s"/></figure>'%((' '+cs) if cs else '',src_of(k),alt))
            out.append(t+'<!-- /wp:image -->')
        else:
            if k.name=='img':
                folder='assets/icon/' if is_icon(k) else 'assets/img/'
                frag='<img%s src="<?php echo esc_url( get_theme_file_uri( \'%s%s\' ) ); ?>" alt="%s" %s/>'%(ca,folder,src_of(k),ihtml.escape(attr(k,'alt') or '',quote=True),'aria-hidden="true"' if 'aria-hidden' in k.attrs else '')
            else:
                frag='<%s%s>%s</%s>'%(k.name,ca,inner(k),k.name)
            out.append(t+'<!-- wp:html -->'); out.append(t+frag); out.append(t+'<!-- /wp:html -->')
        i+=1
    return '\n'.join(x for x in out if x.strip())
def build(sec_html,slug,title,desc,extra=()):
    sec=parse(sec_html).kids[0]
    cs=' '.join(['bbm']+cls(sec)+list(extra))
    return """<?php
/**
 * Title: %s
 * Slug: bb-features/%s
 * Categories: bb-module-pages
 * Description: %s
 *
 * @package BB_Features
 */

$bbm_img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"%s","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull %s">
%s
</div>
<!-- /wp:group -->
"""%(title,slug,desc,cs,cs,render(sec,1))
PAGES = {
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

page = sys.argv[1] if len(sys.argv) > 1 else 'activity-feeds'
if page not in PAGES:
    sys.exit('gen-patterns: unknown page %r — try one of %s' % (page, ', '.join(PAGES)))
SLUG_PFX, PAGE_TITLE, META = PAGES[page]
SRC = str(ROOT / 'website' / (page + '.html'))

html=open(SRC).read(); body=html[html.index('<main>')+6:html.index('</main>')]
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
    # The static sheet expresses the hero -> jump-cards gap as
    # `.mp main > .mp-hero + .section`. A pattern has no siblings to match on,
    # so the tighter rhythm rides on a class instead.
    extra=('bbm-section--tight',) if i==1 else ()
    open(os.path.join(OUT,slug+'.php'),'w').write(build(sec,slug,title,desc,extra))

ASSEMBLER = '''<?php
/**
 * Title: Module — %s full page
 * Slug: bb-features/%s-page
 * Categories: bb-module-pages, pages
 * Block Types: core/post-content
 * Description: The whole %s module page, section by section.
 *
 * @package BB_Features
 */

$bbm_sections = array(
%s
);

foreach ( $bbm_sections as $bbm_section ) {
\t$bbm_file = __DIR__ . '/' . $bbm_section . '.php';

\tif ( is_readable( $bbm_file ) ) {
\t\trequire $bbm_file;
\t}
}
''' % (PAGE_TITLE, SLUG_PFX, PAGE_TITLE,
       '\n'.join("\t'%s',"%s for s in slugs))
open(os.path.join(OUT,'%s-page.php'%SLUG_PFX),'w').write(ASSEMBLER)
print('regenerated %d patterns + %s-page.php for %s'%(len(META),SLUG_PFX,page))
