# BB — BuddyBoss website builds

The **Features (Top Modules)** marketing page, built from Figma frame `1008:8718` of the
BuddyBoss-Website file, in two forms.

<https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=1008-8718>

| | |
|---|---|
| [`website/`](website/) | Static HTML / CSS / JS. No build step, no dependencies. |
| [`wordpress/bb-features/`](wordpress/bb-features/) | WordPress child theme — the same 20 sections as Gutenberg block patterns, built from core blocks only. |

Each folder has its own README with the full build notes.

## Run the static site

```bash
cd website
python3 -m http.server 4321
```

→ <http://localhost:4321>

Append `?reveal` to switch every scroll animation on at once, for screenshots and design
review.

## Install the WordPress theme

Copy `wordpress/bb-features/` into `wp-content/themes/`, set `Template:` in its
`style.css` to your parent theme's directory name, activate, then insert sections from
**+ → Patterns → BuddyBoss — Features**. Requires WordPress 6.0+, no npm.

`preview.html` in that folder renders all 20 patterns statically, so the design can be
reviewed without a WordPress install.

## Fidelity

The static build renders at **15,519px** against the Figma frame's 15,572px — 0.3%, the
accumulated rounding of fractional line heights. An auto-aligned per-section diff against
a 1:1 Figma render puts all 21 sections at 1–6%, and that band is entirely the
Stack Sans → Inter substitution described below.

Design tokens mirror the Figma variable collection rather than approximating it — the
brand ramp, the `xs → 5xl` type scale with its exact line heights, the radius and spacing
steps.

**Stack Sans Headline** is the heading face and is licensed, so it isn't committed. Drop
`StackSansHeadline-{Regular,Medium,SemiBold,Bold}.woff2` into the relevant
`assets/fonts/` folder and uncomment the `@font-face` blocks. Until then headings fall
back to Inter with `letter-spacing: -0.022em`.

## Conventions

- **Buttons never move on hover.** No lift, and no icon slide inside them — colour is the
  only hover feedback on anything clickable. Card hover lifts are fine.
- Product artwork is **exported from Figma, not rebuilt** — each gradient panel is one 2×
  PNG export of that node, so gradients, shadows and crops are exactly the design.
- Icons keep their Figma two-part geometry: the outer icon box sized separately from the
  vector leaf inside it. Figma exports the leaf alone with `preserveAspectRatio="none"`,
  so forcing it to the box size distorts it.

## Scope

This repo contains **only** the website deliverables. The surrounding BuddyBoss knowledge
base — module settings captures, competitor research, Figma text dumps, roadmap mirrors —
stays local. `.gitignore` is a whitelist for exactly that reason.
