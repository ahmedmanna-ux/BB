# BuddyBoss marketing pages · static build

A hand-built HTML / CSS / JS reproduction of sixteen page frames: the homepage
on the Figma **`Home`** canvas (`5:2`), and the fifteen on the **`Features`**
canvas (`1001:8451`). Every page matches its frame exactly — each section on its
y and its height, and the page total to the pixel:

| page | frame | height | page | frame | height |
|---|---|---:|---|---|---:|
| `home` | `3780:57831` | 16,561 | `gamifications` | `3182:24430` | 13,060 |
| `index` | `1008:8718` | 17,096 | `messaging` | `3218:30592` | 8,280 |
| `activity-feeds` | `1886:10326` | 14,158 | `reactions` | `3236:22643` | 6,972 |
| `member-profiles` | `2268:44480` | 14,844 | `offload-media` | `3264:23056` | 6,948 |
| `social-groups` | `2828:23628` | 12,428 | `member-blog` | `3275:23618` | 14,512 |
| `forums` | `2960:29774` | 13,104 | `notifications` | `3465:45441` | 8,836 |
| `media-uploading` | `2891:21136` | 12,792 | `courses` | `3498:55884` | 13,956 |
| `moderation` | `2359:52842` | 11,928 | `appearance` | `3563:62279` | 11,634 |

<https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=1001-8451>
<https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=3780-57831>

**A frame's reported height is not its content height.** Figma frames do not
auto-resize when their content moves, so *every* number above is one the frame
itself gets wrong — each of the fifteen Features frames still reports the height
it had before the footer was redesigned, and the homepage frame reports 17,203
against a real content bottom of 16,561. Always take the last section's
`y + height`; never read the frame's own `height`.

**The two canvases keep different rhythms.** The Features and module pages run a
120px gap between rows (80px on `index`) with the hero followed by 104px. The
homepage runs a uniform **88px** between every row without exception, hero to
footer — which is why `home.html` sets its own rhythm rather than using
`.section`.

## The homepage

`home.html` is **generated** — do not hand-edit it, and do not hand-edit the
`/* ===== HOMEPAGE ===== */` block in `css/style.css` either. Both come from
`website/home-parts/`, one `NN-slug.html` + `NN-slug.css` pair per section:

```bash
python3 tools/assemble-home.py      # parts -> home.html + the fenced CSS block
```

Sections were built and verified one at a time, which is what the pair of files
per section is for. To change one, change its part and re-assemble.

## Run it

```bash
cd "Website Redesign/website"
python3 -m http.server 4321
```

→ <http://localhost:4321>

No build step, no dependencies. Opening `index.html` from the filesystem also works,
but a server is preferred so the relative asset paths and the Inter webfont resolve.

Add `?reveal` to the URL (<http://localhost:4321/?reveal>) to switch every scroll
animation on at once — useful for full-page screenshots and design review.

The header carries a **Preview** dropdown listing all fifteen pages and marking
the current one. It is build scaffolding for moving between them during review —
the design has no such control, and it should come out before handoff.

## Files

```
website/
├─ home.html           the homepage — 19 sections. GENERATED, see above
├─ home-parts/         one NN-slug.html + NN-slug.css pair per homepage section
├─ index.html          the Features page — all 22 sections, in Figma order
├─ <module>.html       fourteen module pages, one file each
├─ css/style.css       tokens → components → module page → per-page blocks →
│                      the fenced HOMEPAGE block (generated) → responsive
├─ js/main.js          scroll reveals, hero scaling, sticky header, mobile nav,
│                      counters, the app carousel and the integrations tabs
└─ assets/
   ├─ img/             277 PNGs — product panels @2× and the hero cards @3×
   ├─ icon/            111 SVG/PNG icons, logos, avatars and review badges
   └─ fonts/           drop Stack Sans Headline here (see below)
```

## Fidelity notes

**Tokens are the Figma variables, not approximations.** `:root` in `style.css` mirrors
the file's variable collection — brand `#ef5d33`, the peach ramp (`#fdefeb` / `#fcdfd6` /
`#f9bead`), the `sm → 5xl` type scale with its exact line heights, the radius and
spacing steps. Change a value there and it propagates the way it does in Figma.

**Every page lands on its Figma height exactly** — see the table above; there is no
accumulated-rounding allowance any more. Section rhythm is 120px on the module pages, 80px
on `index`, and a uniform 88px on `home`.

**Product artwork is exported from Figma, not rebuilt.** Each `Right Panel Image` frame
(the gradient panels with layered app screenshots) is a single 2× PNG export of that node,
so gradients, shadows, crops and layering are exactly what the design shows. The six
floating hero cards are 3× exports positioned on their real Figma coordinates — the CSS
offsets account for each export's shadow bleed, so the card's *content box* lands on the
designed pixel.

**Icons keep their two-part geometry.** Figma exports icons as the bare vector leaf at its
true size with `preserveAspectRatio="none"`, so forcing them to 16/20/32px would stretch
them. The `ICON METRICS` block gives every icon its outer box as `width`/`height` and
recreates the leaf inset as `padding`, straight from the Figma inset percentages.

That is the single most repeated defect in this build, and it is nearly invisible: a
stretched glyph still lands on its coordinate, so no geometry check sees it. Three separate
instances were found in one pass — every footer social icon (a 22x24 X mark and a 28x22
YouTube mark both forced into 32px boxes), the footer's `ft-arrow` (12x10 into 16px), and
the homepage carousel arrows (a 21x17.5 leaf declared at 18x15 with no box at all).
**Export the iconFrame instance, not the vector leaf inside it**, and keep both sizes.

**Stack Sans Headline** is the heading face and is licensed, so it isn't bundled. Drop
`StackSansHeadline-{Regular,Medium,SemiBold,Bold}.woff2` into `assets/fonts/` and the
`@font-face` rules pick them up with no other change. Until then headings fall back to
Inter with `letter-spacing: -0.022em`, which is the closest optical match.

## Responsive

The page is fluid, not a scaled screenshot — except the hero.

| Width | Behaviour |
|---|---|
| ≥ 1600px | the design frame, 1:1 |
| 1100 – 1600px | gutters go fluid; the hero's 1600px frame is scaled as a unit so the floating cards stay on their exact coordinates |
| ≤ 1099px | hero reflows to a centred stack, floating cards drop |
| ≤ 1180px | module grid → 3 columns, feature rows → 2, stats → 2 |
| ≤ 1024px | nav collapses to a hamburger; every split/duo/halves block stacks with the artwork leading; type scale steps down |
| ≤ 720px | module grid → 2 columns, single-column stats and footer, full-width hero buttons |

## Motion

- **Scroll reveals** — `[data-reveal]` (up / left / right / zoom) and `[data-stagger]`
  for lists and grids, driven by one `IntersectionObserver`, unobserved after firing.
- **Hero** — the six floating cards drift on staggered 7–9.5s loops.
- **Stats** — count up to their real values when scrolled into view; the gradient bars
  wipe in from the left.
- **App carousel** — four slides matching the four pagination dots in the design. Each
  slide holds a trio of phones (left / centre / right) and the whole trio changes at
  once. Autoplays every 4.5s and pauses on hover, focus, touch, tab-hide and when
  scrolled out of view. The dots switch slides and take arrow keys.
  *Slides 2–4 currently reuse the same three screens as placeholders — drop the real
  exports into `assets/img/` and swap the `src`s in the four `.phone-set` blocks.*
- **Hover** — cards lift. **Buttons never move**: no lift, and the arrow inside them
  doesn't slide either. Colour is the only hover feedback on anything clickable.
- All of it is behind `prefers-reduced-motion`. The hidden start state is scoped to
  `html.js`, so with JavaScript off the page renders fully; printing force-reveals too.

There is deliberately **no parallax on the product panels** — any translate needs a
compensating scale, and that re-crops the exported artwork.

## Checking a page against Figma

Three scripts in [`../tools/`](../tools/), and the reason there are three is that each
catches what the others cannot.

```bash
python3 tools/pagegeom.py website/home.html          # every section's y and height
python3 tools/probe.py website/home-parts/07-facts.html --css website/home-parts/07-facts.css
python3 tools/pagediff.py facts figma.png build.png  # where two renders differ
```

- **`pagegeom.py`** measures a whole built page, one line per top-level section plus the
  header and footer. Its output has the same shape as a Figma frame's row list, so the two
  diff directly.
- **`probe.py`** renders a single section fragment on its own and reports every classed box
  relative to the section — the coordinate space Figma reports. Pass `--screenshot` for a
  1:1 PNG. A section built in place and a section built in isolation can differ by a
  neighbour's margin, and a whole-page screenshot hides which one you are looking at.
- **`pagediff.py`** blocks a render diff into 8px cells and reports connected regions.
  Because Stack Sans is missing, a *correct* page still lights 5-10% of cells — but as
  thousands of specks with a median region of 4-6 cells. **One big contiguous region is a
  real fault.** The finished homepage measures 5.7% lit with a largest region of 262 cells,
  all of them text runs.

**Geometry gates are blind to colour, letter-spacing, shadows and opacity** — none of those
move a box, and five separate regressions have shipped through a green height check on this
build for exactly that reason: eyebrow tracking, a hero eyebrow, a hero shadow, a whole
replaced section, and a footer rebuilt around it. `pagediff.py` is the check that catches
them; run it, and open any region over ~450 cells.

## Also here

A WordPress child theme built from this same source lives in
[`../wordpress/bb-features/`](../wordpress/bb-features/) — every page's sections as
Gutenberg block patterns. See its README for the differences.

## Known gaps carried over from the design

These are in the Figma file as-is and were reproduced rather than silently fixed:

### Homepage (`3780:57831`)

A full copy audit of this frame — 10 blockers, 11 high, 30 medium — lives in
`homepage-3780-copy-audit.md` alongside the design notes. That file is deliberately outside
this repo: it quotes competitor pricing and internal figures, and `.gitignore` here is a
whitelist for exactly that reason. None of its findings are addressed in the design yet and
the build reproduces every one verbatim. The ones you will notice first:

- The three review bands carry the **same quote under the same placeholder byline**,
  `John Doe / Managing Director`, three times down one page.
- The opening bento ends a tile description in literal lorem ipsum
  (`Granular permissions, access controls, and ipsum`), and Social groups and Forums share
  one description word for word.
- The four Done For You and expert cards reuse copy and imagery across cards.
- The pricing band's `$79` is not a BuddyBoss price at any billing period.
- The SOLUTIONS footer column used to list **`Faith` twice** and spell it
  `Club & Associations`; the design fixed both on 2026-08-28, which is what took the
  footer from 468 to 438 and every page down 30px with it.
- **Eyebrow casing is unnormalised on purpose** — `courses` and `who it is for` are
  lowercase, `Community Features` and `Pricing` are title case, `THE DIFFERENCE` is caps and
  `DONE for you` is mixed. `.tag` uppercases all of them, so the source case is invisible on
  screen and only shows up after the Gutenberg export. It is reproduced per string; do not
  normalise it.

- **Courses** still has placeholder bullets (`Feature name — what it does`) and body copy
  duplicated from Social Groups / Reactions.
- **Offload Media** bullets 2–6 read `what it does`.
- **Offload Media** and **SEO Settings** both use the button label
  `Explore More Member Profiles`; **Gamifications** uses `Explore More Media Uploads`.
- Headline typos are verbatim: `Activity feeds that feels alive`,
  `Gamify your commmunity`, `Every member. more than a username`.
- The section frames named `Moderation` / `Offload Media` at `1565:17579` / `1720:20110`
  actually contain **SEO Settings** and **Member Blogging** — stale layer names.
