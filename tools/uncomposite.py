#!/usr/bin/env python3
"""Strip a baked-in backdrop out of a Figma frame export.

    python3 tools/uncomposite.py website/assets/img/mp-hero.png [--bg FCEFEB]

Figma often exports a *frame* with its parent's background painted in as opaque
pixels — every pixel comes back alpha 255 and the shadow halo around the
artwork is a solid plate of the band colour. Dropped onto a page it reads as a
hard-edged rectangle around the picture, and it paints over anything behind it
(the module-page hero has a polygon back there). Re-exporting does not help.

The fix is to solve for the alpha the export threw away.

**Finding the true exterior.** Outside the artwork there is only its drop
shadow, which is a black darkening of the band — so an exterior pixel is the
background scaled by ONE factor across all three channels. Anything with a
colour of its own fails that test, which is what lets a white UI panel seal its
own interior. Flood-fill inward from the border through pixels that pass.
Without the seal, a shadow falling on *white* gets reconstructed as if it fell
on peach and reads pink over whatever is behind the image.

**Solving the alpha.** For each exterior pixel take the smallest alpha that
keeps every channel of `F = (C - (1-a)*BG) / a` inside 0..255 — clamped on both
ends, since a pixel a shade brighter than the band constrains alpha from below
just as a darker one does. Quantise alpha to 8 bits *first* and solve the
colour against that exact value, so the round trip is lossless rather than
within a rounding step.

The script asserts that re-compositing the result over BG reproduces the export
to within one channel step, and refuses to write anything if it does not.
"""

import argparse
import math
import pathlib
import sys
from collections import deque

from PIL import Image

# The colour Figma's PNG renderer produces for background/brand/subtle. It is
# one unit off the variable (#FDEFEB) — trust the render here, since matching
# the export is the whole point.
DEFAULT_BG = (252, 239, 235)

FLAT = 0.035     # how far the three channel ratios may spread and still be shadow
BRIGHT = 1.01    # how much brighter than BG a pixel may be and still be exterior


def parse_hex(s: str) -> tuple:
    s = s.lstrip('#')
    if len(s) != 6:
        raise argparse.ArgumentTypeError('--bg wants a 6-digit hex colour')
    return tuple(int(s[i:i + 2], 16) for i in (0, 2, 4))


def exterior_mask(px, W: int, H: int, bg: tuple) -> bytearray:
    def like(c):
        ks = [c[i] / bg[i] for i in range(3)]
        return max(ks) <= BRIGHT and max(ks) - min(ks) < FLAT

    seen = bytearray(W * H)
    q = deque()

    def seed(x, y):
        if not seen[y * W + x] and like(px[x, y]):
            seen[y * W + x] = 1
            q.append((x, y))

    for x in range(W):
        seed(x, 0); seed(x, H - 1)
    for y in range(H):
        seed(0, y); seed(W - 1, y)
    while q:
        x, y = q.popleft()
        for nx, ny in ((x + 1, y), (x - 1, y), (x, y + 1), (x, y - 1)):
            if 0 <= nx < W and 0 <= ny < H and not seen[ny * W + nx] and like(px[nx, ny]):
                seen[ny * W + nx] = 1
                q.append((nx, ny))
    return seen


def knockout(im: Image.Image, bg: tuple) -> Image.Image:
    W, H = im.size
    px = im.load()
    ext = exterior_mask(px, W, H, bg)

    res = Image.new('RGBA', (W, H))
    rp = res.load()
    for y in range(H):
        row = y * W
        for x in range(W):
            c = px[x, y]
            if not ext[row + x]:
                rp[x, y] = (c[0], c[1], c[2], 255)
                continue
            a = 0.0
            for i in range(3):
                if c[i] < bg[i]:
                    a = max(a, (bg[i] - c[i]) / bg[i])
                elif c[i] > bg[i] and bg[i] < 255:
                    a = max(a, (c[i] - bg[i]) / (255 - bg[i]))
            a8 = min(255, math.ceil(a * 255))
            if a8 == 0:
                rp[x, y] = (0, 0, 0, 0)
                continue
            af = a8 / 255
            rp[x, y] = tuple(
                min(255, max(0, round((c[i] - (1 - af) * bg[i]) / af))) for i in range(3)
            ) + (a8,)

    worst = 0.0
    rl = res.load()
    for y in range(H):
        for x in range(W):
            r, g, b, a = rl[x, y]
            af = a / 255
            for i, v in enumerate((r, g, b)):
                worst = max(worst, abs(v * af + bg[i] * (1 - af) - px[x, y][i]))
    if worst > 1.0:
        sys.exit(f'uncomposite: re-compositing is off by {worst:.2f} — refusing to write')

    pct = 100 * sum(ext) / (W * H)
    print(f'  exterior {pct:.1f}%   round trip within {worst:.2f}')
    return res


def main() -> None:
    ap = argparse.ArgumentParser(description=__doc__.split('\n')[0])
    ap.add_argument('paths', nargs='+', type=pathlib.Path)
    ap.add_argument('--bg', type=parse_hex, default=DEFAULT_BG,
                    help='the backdrop that got baked in (default FCEFEB)')
    args = ap.parse_args()

    for p in args.paths:
        im = Image.open(p)
        if im.mode == 'RGBA' and im.getchannel('A').getextrema()[0] < 255:
            print(f'{p}: already has transparency, skipping')
            continue
        print(f'{p}:')
        knockout(im.convert('RGB'), args.bg).save(p)
        print(f'  rewrote {p}')


if __name__ == '__main__':
    main()
