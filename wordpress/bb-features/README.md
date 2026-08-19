# BB Features — WordPress child theme

The BuddyBoss marketing pages as Gutenberg block patterns:

| page | Figma frame | pattern category | scope |
|---|---|---|---|
| Features (Top Modules) | [`1008:8718`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=1008-8718) | BuddyBoss — Features | `.bbf` |
| Activity Feeds | [`1886:10326`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=1886-10326) | BuddyBoss — Module pages | `.bbm` |
| Member Profiles | [`2268:44480`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=2268-44480) | BuddyBoss — Module pages | `.bbm` |
| Social Groups | [`2828:23628`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=2828-23628) | BuddyBoss — Module pages | `.bbm` |
| Forums | [`2960:29774`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=2960-29774) | BuddyBoss — Module pages | `.bbm` |
| Media Uploading | [`2891:21136`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=2891-21136) | BuddyBoss — Module pages | `.bbm` |
| Moderation | [`2359:52842`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=2359-52842) | BuddyBoss — Module pages | `.bbm` |
| Gamifications | [`3182:24430`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3182-24430) | BuddyBoss — Module pages | `.bbm` |
| Messaging | [`3218:30592`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3218-30592) | BuddyBoss — Module pages | `.bbm` |
| Like & Reactions | [`3236:22643`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3236-22643) | BuddyBoss — Module pages | `.bbm` |
| Offload Media | [`3264:23056`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3264-23056) | BuddyBoss — Module pages | `.bbm` |
| Member Blog | [`3275:23618`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3275-23618) | BuddyBoss — Module pages | `.bbm` |
| Notifications | [`3465:45441`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3465-45441) | BuddyBoss — Module pages | `.bbm` |
| Courses | [`3498:55884`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3498-55884) | BuddyBoss — Module pages | `.bbm` |
| Appearance | [`3563:62279`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3563-62279) | BuddyBoss — Module pages | `.bbm` |

Every frame lives on the Figma **`Features`** canvas, `1001:8451`. Worth noting
because the API will not enumerate that canvas — asking for the document's pages
returns only `Components`, and neither of the other two it will hand back holds
any of these frames. You need a node id from it to get in.

The two scopes are independent: each declares its own tokens and prefixes its
own class names, so neither reads from nor leaks into the other. All fourteen
module pages share one component set under `.bbm`; a section picks its card
stroke with `bbm-edge--peach` / `--blue` / `--green`, and each page adds a small
page-scoped block (`.bbm-sg`, `.bbm-mu`, …) carrying the `--bbm-edge-angle` for
whatever card geometries it introduces.

Two page shapes exist. Most run a section head over a stack of cards. Messaging,
Like & Reactions, Offload Media and Notifications instead put every feature card
inside one wrapper with no per-chapter head, which is why they are five patterns
where the others are ten or more.

## Install

1. Copy the `bb-features/` folder into `wp-content/themes/`.
2. Open `style.css` and set `Template:` to the **directory name of your parent theme**
   (it currently says `buddyboss-theme`). Getting this wrong is the one thing that
   stops the theme activating.
3. Activate **BB Features** in Appearance → Themes.
4. Edit any page → **+** → **Patterns** → **BuddyBoss — Features** or **BuddyBoss — Module pages**.

Requires WordPress 6.0+ (that's when patterns in `/patterns/` began auto-registering).
No build step, no npm, no dependencies.

### Prefer a plugin?

Nothing here is theme-specific except the parent-stylesheet handoff in
`functions.php`. Drop `functions.php`, `patterns/` and `assets/` into a plugin folder,
add a plugin header, swap `get_theme_file_uri()` for `plugins_url()`, and register the
patterns with `register_block_pattern()` — the patterns then survive a theme switch.

## What's in the box

| | |
|---|---|
| `theme.json` | The Figma variables as editor presets — brand palette, the `xs → 5xl` type scale, spacing steps. They appear in Gutenberg's own colour and typography pickers. |
| `patterns/` | 158 files. 21 Features sections + `features-page.php`; then the fourteen module pages — `af-*` (12), `mp-*` (12), `sg-*` (10), `fo-*` (10), `mu-*` (11), `md-*` (10), `ga-*` (10), `ms-*` (5), `lr-*` (5), `om-*` (5), `mb-*` (10), `nt-*` (5), `co-*` (10), `ap-*` (7) — each with a `*-page.php` that composes its whole page in one insert. |
| `assets/css/features.css` | Every Features section style, scoped under `.bbf`. |
| `assets/css/module-page.css` | Every module-page style, scoped under `.bbm`. |
| `assets/js/features.js` | Scroll reveals, hero framing, stat counters, app carousel — drives both scopes. Front end only. |
| `assets/img`, `assets/icon` | Panel and hero PNGs plus the icon set, exported from Figma. |
| `preview.html`, `preview-module.html` | Static renders of each page's patterns, for design review without a WP install. Safe to delete. |

## Regenerating

`assets/css/module-page.css`, the `af-*`/`mp-*` patterns and `preview-module.html`
are **generated** from the static build in `../../website/`, so the two cannot
drift. After changing that build, run:

```sh
cd Website Redesign/wordpress
python3 tools/gen-module-css.py
for p in activity-feeds member-profiles social-groups forums media-uploading \
         moderation gamifications messaging reactions offload-media \
         member-blog notifications courses appearance; do
  python3 tools/gen-patterns.py $p
done
python3 tools/gen-preview.py activity-feeds member-profiles social-groups forums \
  media-uploading moderation gamifications messaging reactions offload-media \
  member-blog notifications courses appearance
python3 tools/gen-preview-features.py
```

Each script validates its own output (prefixing, brace balance, missing assets)
and exits non-zero rather than writing something subtly wrong.

Adding a page? `gen-patterns.py` refuses to run unless its `PAGES` entry
describes exactly as many sections as the page has, in order. Draft that entry
straight off the built markup rather than by hand:

```sh
python3 tools/scaffold-page-entry.py courses co "Courses"
```

It names each section from the component it contains, numbers repeated slugs
(a page with two CTA bands would otherwise write one file over the other), and
takes chapter names from their eyebrow. Read what it prints before pasting — it
is a scaffold, not an oracle.

## The site header

Both designs put the nav **on** the hero with no fill of its own — the peach runs
up behind it. A WordPress header lives in the template, not in a pattern, so that
is opt-in here: make the header transparent in the parent theme, then add
`bbf-hero--under-header` / `bbm-hero--under-header` to the hero group. Override
`--bbf-header-h` / `--bbm-header-h` if the bar is not 72px tall.

## Patterns

`hero` · `module-grid` · `activity-feeds` · `social-groups` · `forum-messaging` ·
`member-profiles` · `review` · `reactions-notifications` · `media-uploads` ·
`gamifications` · `moderation` · `offload-media` · `seo-settings` · `member-blogging` ·
`mobile-app` · `courses` · `theme-readylaunch` · `integrations` · `stats` ·
`testimonials` · `cta`

Everything is built from **core blocks** — group, heading, paragraph, list, image,
buttons. Editors change copy and swap images with the normal Gutenberg controls; there
is no custom block to learn and nothing to rebuild when WordPress updates.

There is **no header or footer pattern**. Those are template parts and belong to your
parent theme.

## Five decisions worth knowing

**1. `className` only — never `data-*`.** Core blocks persist `className` and drop
unknown attributes, so a hand-written `data-reveal` would make Gutenberg mark the block
invalid the first time someone edits it. Reveals, stagger and the carousel are all
driven by classes (`bbf-reveal`, `bbf-stagger`, `bbf-carousel`).

There are **two** carousels on the Features page and they must not share a hook.
`bbf-carousel` is the mobile-app phone strip; the Integrations section is
`bbf-integrations`. They collided once, and the symptom was not obvious — the
integrations shell silently bound to the phone strip's initialiser and measured
122px short.

**2. The stat counters read their target from the rendered text.** `65,000+` is parsed
into `65000` + `+`, so an editor can change the number in Gutenberg and the count-up
follows. No attribute to keep in sync.

**3. Icons are CSS backgrounds with the Figma geometry preserved.** Figma exports icons
as the bare vector *leaf* at its true size with `preserveAspectRatio="none"` — stretching
one to 32px distorts it. Each icon rule sets the outer box as `width`/`height` and places
the leaf with `background-position` + `background-size` taken from the Figma insets. It
also keeps icons out of the media library, which matters because WordPress blocks SVG
uploads by default and the plugins that "fix" that open a real XSS hole.

**4. The script never loads in the editor.** The reveal start state is scoped to
`html.js`, and `features.js` is what adds that class — so the editor canvas, which never
loads it, renders every section fully visible and editable. Same trick keeps the app
carousel from animating while you're laying out a page.

**5. Everything is scoped under `.bbf`.** No global resets, so the parent theme is
untouched and its styles can't leak in.

## Responsive

Fluid, except the hero. Between 1100–1600px the hero's 1600px design frame is scaled as
a single unit so the six floating cards keep their exact Figma coordinates; below 1100px
it reflows to a centred stack. Breakpoints at 1440 / 1180 / 1024 / 720 step the grids
down and stack the split cards artwork-first.

Sections use `alignfull`. If your parent theme doesn't support wide alignments they'll be
constrained to the content width — add `add_theme_support( 'align-wide' )` to fix that.

## Motion

Scroll reveals (up / left / right / zoom + stagger), hero cards drifting on offset loops,
stat count-ups with gradient bar wipes, card hover lifts, and the app carousel. All behind
`prefers-reduced-motion`; printing force-reveals. Append `?reveal` to any URL to switch
every animation on at once for screenshots.

**Buttons never move on hover** — no lift, and the arrow inside them doesn't slide
either. Colour is the only hover feedback on anything clickable.

### App carousel

Four slides, matching the four pagination dots in the design. Each slide is a
`.bbf-phone-set` holding a trio of phones (left / centre / right) and the whole trio
changes at once — one `translateX` on the track. Autoplays every 4.5s and pauses on
hover, focus, touch, tab-hide, and when scrolled out of view. The dots switch slides and
take arrow keys.

**Slides 2–4 currently reuse the same three screens as placeholders.** Drop the real
exports into `assets/img/` and swap the image `src`s in the `mobile-app` pattern — or
just replace them in Gutenberg, since each phone is a normal `core/image` block. Adding
or removing a `.bbf-phone-set` changes the dot count automatically.

## Fonts

Stack Sans Headline is licensed and isn't bundled. Drop
`StackSansHeadline-{Regular,Medium,SemiBold,Bold}.woff2` into `assets/fonts/` and
uncomment the four `@font-face` blocks at the top of `features.css`. Until then headings
render in Inter with `letter-spacing: -0.022em`, the closest optical match.

To get the font into the editor as well, add a `fontFace` entry to the `heading` family
in `theme.json`.

### Integrations

The Features page's Integrations section is a five-state carousel: the logo
overview the section is drawn with, then the four integration tabs from
[`3647:75306`](https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3647-75306)
— Tutor LMS, Zoom, reCAPTCHA and Event Calendar Pro. A dot swaps the head, the
slide and the shell's stroke together; the tabs carry a gradient ramp (blue, or
green for Zoom) where the overview has a flat brand outline.

The design draws those tabs as standalone sections with no pagination bar of
their own. Here the bar stays inside the shell in every state and the content
area is pinned to the overview's 600, so the section holds at 844 whichever tab
is showing and nothing jumps.

## Carried over from the design

Reproduced as-is rather than silently fixed:

- Every module page's **closing CTA** reads `Give your community a feed worth
  checking daily` — Activity Feeds copy, on all fourteen.
- Every **Explore more feature modules** trio repeats the Member Profiles blurb
  (`Everything on a community website revolves around its members…`) under all
  three titles.
- All sixteen bullets across the **integration tabs** read
  `Feature name — what it does`, and each tab's second paragraph is filler
  pasted in from the Reactions module.
- **Social Groups** ships ten unwritten `Feature name — what it does` bullets;
  **Media Uploading** ten more, plus a jump-card strip numbered 1, 2, 2, 4.
- **Forums** pastes the Favorites paragraph into the Discussion Tags card, and
  two of its section headings read as Groups copy — `Every group, dressed for
  your community` under FORUM FEATURES, `Who creates, who joins, who runs it`
  under MANAGE.
- Headline typos are verbatim: `Activity feeds that feels alive`,
  `Gamify your commmunity`, `Every member. more than a username`.
- Layer names are routinely stale and were ignored in favour of content: frames
  called `Moderation` / `Offload Media` at `1565:17579` / `1720:20110` hold
  **SEO Settings** and **Member Blogging**; the Integrations section is named
  `Gamifications`; and four separate frames on one page are all called
  `Discover`.

Fixed since, because the design fixed them: the `Explore More Member Profiles` /
`Explore More Media Uploads` button labels are now `Explore Offload Media` and
`Explore Gamifications`, and SEO Settings' button is hidden in the design.
