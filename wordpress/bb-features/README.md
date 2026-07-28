# BB Features — WordPress child theme

The **Features (Top Modules)** marketing page as Gutenberg block patterns.
Built from Figma frame `1008:8718` of the BuddyBoss-Website file.

<https://www.figma.com/design/EnWGQLBhpMDkOR7YqMmv28/BuddyBoss-Website?node-id=1008-8718>

## Install

1. Copy the `bb-features/` folder into `wp-content/themes/`.
2. Open `style.css` and set `Template:` to the **directory name of your parent theme**
   (it currently says `buddyboss-theme`). Getting this wrong is the one thing that
   stops the theme activating.
3. Activate **BB Features** in Appearance → Themes.
4. Edit any page → **+** → **Patterns** → **BuddyBoss — Features**.

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
| `patterns/` | 20 section patterns + `features-page.php`, which composes all 20 into the full page in one insert. |
| `assets/css/features.css` | Every section style, scoped under `.bbf`. |
| `assets/js/features.js` | Scroll reveals, hero framing, stat counters, app carousel. Front end only. |
| `assets/img`, `assets/icon` | 26 panel/hero PNGs and 45 icons, exported from Figma. |
| `preview.html` | Static render of all 20 patterns for design review without a WP install. Safe to delete. |

## Patterns

`hero` · `module-grid` · `activity-feeds` · `social-groups` · `forum-messaging` ·
`member-profiles` · `review` · `reactions-notifications` · `media-uploads` ·
`gamifications` · `moderation` · `offload-media` · `seo-settings` · `member-blogging` ·
`mobile-app` · `courses` · `theme-readylaunch` · `stats` · `testimonials` · `cta`

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

## Carried over from the design

Reproduced as-is rather than silently fixed:

- **Courses** still has placeholder bullets (`Feature name — what it does`) and body copy
  duplicated from Social Groups / Reactions.
- **Offload Media** bullets 2–6 read `what it does`.
- **Offload Media** and **SEO Settings** both use the button label
  `Explore More Member Profiles`; **Gamifications** uses `Explore More Media Uploads`.
- Headline typos are verbatim: `Activity feeds that feels alive`,
  `Gamify your commmunity`, `Every member. more than a username`.
- The frames named `Moderation` / `Offload Media` at `1565:17579` / `1720:20110` actually
  contain **SEO Settings** and **Member Blogging** — stale layer names.
