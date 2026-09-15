#!/usr/bin/env python3
"""Compose website/use-cases.html from the shared chrome in index.html.

The 16 existing pages are hand-written single files that each carry their own
copy of the header and footer; this keeps use-cases.html in that same shape
rather than inventing a second assembler for one page. Chrome is lifted from
index.html verbatim so the three builds cannot drift apart at birth.
"""
import importlib.util
import re
import sys
from pathlib import Path

TOOLS = Path(__file__).resolve().parent
SITE = TOOLS.parents[0] / 'website'

# nav.py is the single place that knows which pages are safe to link. Import it
# rather than keeping a second list here — the last time this build kept two
# copies of a page list they drifted and shipped a dead link on every page.
_spec = importlib.util.spec_from_file_location('bb_nav', TOOLS / 'nav.py')
_nav = importlib.util.module_from_spec(_spec)
_spec.loader.exec_module(_nav)
INCOMPLETE = _nav.INCOMPLETE


def linkable(filename):
    """A card only becomes a link once its page exists AND is finished."""
    return (SITE / filename).exists() and filename not in INCOMPLETE

src = (SITE / 'index.html').read_text(encoding='utf-8')


def slice_between(text, start_pat, end_pat):
    """Slice from `start_pat` to the first `end_pat` that follows it.

    Searching for the end from position 0 is the bug that shipped the homepage
    with no main.js: the first </script> in the file closes the inline `js`
    snippet up in the <head>, so the slice ran backwards and came out empty.
    """
    a = re.search(start_pat, text)
    if not a:
        sys.exit(f'build_usecases_hub: no match for {start_pat!r}')
    b = re.search(end_pat, text[a.end():])
    if not b:
        sys.exit(f'build_usecases_hub: no {end_pat!r} after {start_pat!r}')
    return text[a.start():a.end() + b.end()]


head_open = src[:src.index('<title>')]
header = slice_between(src, r'<header class="site-header"', r'</header>')
footer = slice_between(src, r'<footer class="site-footer"', r'</footer>')

TITLE = 'BuddyBoss — Use cases for courses and communities of all kinds'
DESC = ('Explore how BuddyBoss powers education, online courses, brands, faith '
        'groups, social networks, professional networks, coaching, causes, clubs '
        'and language learning.')

# (slug, icon, name, description) — copy is verbatim from Figma 4702:71283.
# Note Education says "students’ performance and increase" while Language
# Learning says "students’ performance, and increase". The comma really is
# only on one of them; do not normalise it.
CARDS = [
    ('education', 'uc-education', 'Education',
     'Boost the classroom experience, enhance students’ performance and increase '
     'course completion rates with BuddyBoss for Education.'),
    ('online-courses', 'uc-online-course', 'Online Course',
     'Create online courses with a collaborative learning experience on Web, iOS '
     '&amp; Android. The only web/mobile platform to bring online learning and '
     'scalable communities to course creators. No matter how big your knowledge '
     'business grows, BuddyBoss grows with you.'),
    ('brands', 'uc-brands', 'Brands',
     'Empower your community, your way. No policing, no restrictions, no '
     'limitation. Drive conversations, fuel brand loyalty, and build closer '
     'relationships with your customers.'),
    ('faith', 'uc-faith', 'Faith',
     'Gather members of your faith online for prayer meetings, worship events and '
     'education. Reach people 7 days a week from anywhere in the world.'),
    ('social-network', 'uc-social-networks', 'Social Networks',
     'Empower your community, your way. No policing, no restrictions, no '
     'limitation. Control your privacy, data, and users.'),
    ('professional', 'uc-professional', 'Professional',
     'Bring people from any industry together inside a private network to learn '
     'and connect together. Fuel the careers of your community with online '
     'courses, exclusive events, jobs boards, and much more.'),
    ('coaching', 'uc-coaching', 'Coaching',
     'Build an online coaching business that gives clients exactly what they '
     'need, when they need it. Grow engagement, retention, and results with '
     'powerful online learning and community features.'),
    ('causes', 'uc-causes', 'Causes',
     'Bring people of similar beliefs, ethnicities, genders, goals, or life '
     'stages together to make a positive impact in your community.'),
    ('clubs-associations', 'uc-clubs', 'Clubs &amp; Associations',
     'Reward your members with an exclusive community to collaborate together. '
     'Customize your platform your way. Manage membership benefits, payments and '
     'more.'),
    ('language-learning', 'uc-language-learning', 'Language Learning',
     'Boost the classroom experience, enhance students’ performance, and increase '
     'course completion rates with BuddyBoss for Language Learning.'),
]

cards = []
pending = []
for slug, icon, name, desc in CARDS:
    if linkable(f'{slug}.html'):
        open_tag = f'<a class="uc-card" href="{slug}.html">'
        close_tag = '</a>'
    else:
        # Same card, same styling, no href — a card for a page that does not
        # exist yet must not be a 404. It becomes a link the moment the page
        # lands and this tool is re-run.
        pending.append(slug)
        open_tag = '<div class="uc-card uc-card--pending">'
        close_tag = '</div>'
    cards.append(f'''      {open_tag}
        <span class="uc-card__body">
          <span class="uc-card__name">
            <img class="uc-card__icon" src="assets/icon/{icon}.svg" alt="" aria-hidden="true">
            <span class="uc-card__title">{name}</span>
          </span>
          <span class="uc-card__text">{desc}</span>
        </span>
        <span class="uc-card__more">Explore Use case <img src="assets/icon/ft-arrow.svg" alt="" aria-hidden="true"></span>
      {close_tag}''')
grid = '\n'.join(cards)

main = f'''<main class="uc">

<!-- ============================== HERO ============================= -->
<section class="uc-hero">
  <img class="uc-hero__orb" src="assets/img/uc-hero-ellipse.svg" alt="" aria-hidden="true">
  <div class="uc-hero__inner">
    <p class="uc-hero__eyebrow">Use cases</p>
    <h1 class="uc-hero__title">We support courses and communities of all kinds</h1>
  </div>
</section>

<!-- ============================== GRID ============================= -->
<section class="shell">
  <div class="uc-grid">
{grid}
  </div>
</section>

<!-- =============================== CTA ============================= -->
<section class="shell">
  <div class="cta reveal reveal--zoom">
    <h2 class="h1 cta__title">Build your online community today with 50% off</h2>
    <p class="cta__text">Build thriving communities, membership sites, and online learning platforms with BuddyBoss—the leading WordPress community platform.</p>
    <a href="#" class="btn btn--white btn--lg">Get BuddyBoss Now <img class="ico-arrow" src="assets/icon/cta-arrow.svg" alt="" aria-hidden="true"></a>
  </div>
</section>

</main>'''

page = (
    head_open
    + f'<title>{TITLE}</title>\n'
    + f'<meta name="description" content="{DESC}">\n'
    + src[src.index('<link rel="icon"'):src.index('<header class="site-header"')]
    + header
    + '\n\n' + main + '\n\n'
    + footer
    + '\n\n<script src="js/main.js"></script>\n</body>\n</html>\n'
)

out = SITE / 'use-cases.html'
out.write_text(page, encoding='utf-8')
print(f'wrote {out}  ({len(page)} bytes, {page.count(chr(10))} lines)')
print(f'cards: {len(CARDS)}  linked: {len(CARDS) - len(pending)}')
if pending:
    print('  rendered inert (page not built or not finished):')
    for slug in pending:
        why = INCOMPLETE.get(f'{slug}.html', 'not built yet')
        print(f'    - {slug}  ({why})')
