# BuddyBoss marketing pages · static build

A hand-built HTML / CSS / JS reproduction of the fifteen page frames on the
Figma **`Features`** canvas (`1001:8451`). Every page matches its frame exactly —
each section on its y and its height, and the page total to the pixel:

| page | frame | height | page | frame | height |
|---|---|---:|---|---|---:|
| `index` | `1008:8718` | 16,532 | `gamifications` | `3182:24430` | 13,316 |
| `activity-feeds` | `1886:10326` | 14,414 | `messaging` | `3218:30592` | 8,536 |
| `member-profiles` | `2268:44480` | 15,100 | `reactions` | `3236:22643` | 7,228 |
| `social-groups` | `2828:23628` | 12,684 | `offload-media` | `3264:23056` | 7,204 |
| `forums` | `2960:29774` | 13,360 | `member-blog` | `3275:23618` | 14,768 |
| `media-uploading` | `2891:21136` | 13,048 | `notifications` | `3465:45441` | 9,092 |
| `moderation` | `2359:52842` | 12,184 | `courses` | `3498:55884` | 14,212 |
| | | | `appearance` | `3563:62279` | 11,890 |

<https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=1001-8451>

**A frame's reported height is not its content height.** Figma frames do not
auto-resize when their content moves, so several of these report a stale number —
Notifications says 9,076 and actually ends at 9,092. Always take the last
section's `y + height`.

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
├─ index.html          the Features page — all 22 sections, in Figma order
├─ <module>.html       fourteen module pages, one file each
├─ css/style.css       tokens → components → module page → per-page blocks → responsive
├─ js/main.js          scroll reveals, hero scaling, sticky header, mobile nav,
│                      counters, the app carousel and the integrations tabs
└─ assets/
   ├─ img/             226 PNGs — product panels @2× and the hero cards @3×
   ├─ icon/            75 SVG/PNG icons, logos, avatars and review badges
   └─ fonts/           drop Stack Sans Headline here (see below)
```

## Fidelity notes

**Tokens are the Figma variables, not approximations.** `:root` in `style.css` mirrors
the file's variable collection — brand `#ef5d33`, the peach ramp (`#fdefeb` / `#fcdfd6` /
`#f9bead`), the `sm → 5xl` type scale with its exact line heights, the radius and
spacing steps. Change a value there and it propagates the way it does in Figma.

**Page height comes out at 15,519px against the Figma frame's 15,572px** — 0.3%, which is
the accumulated rounding of fractional line heights. Section rhythm is the designed 104px
throughout, with 88px between the hero and the module grid.

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

## Also here

A WordPress child theme built from this same source lives in
[`../wordpress/bb-features/`](../wordpress/bb-features/) — the 20 sections as Gutenberg
block patterns. See its README for the differences.

## Known gaps carried over from the design

These are in the Figma file as-is and were reproduced rather than silently fixed:

- **Courses** still has placeholder bullets (`Feature name — what it does`) and body copy
  duplicated from Social Groups / Reactions.
- **Offload Media** bullets 2–6 read `what it does`.
- **Offload Media** and **SEO Settings** both use the button label
  `Explore More Member Profiles`; **Gamifications** uses `Explore More Media Uploads`.
- Headline typos are verbatim: `Activity feeds that feels alive`,
  `Gamify your commmunity`, `Every member. more than a username`.
- The section frames named `Moderation` / `Offload Media` at `1565:17579` / `1720:20110`
  actually contain **SEO Settings** and **Member Blogging** — stale layer names.
