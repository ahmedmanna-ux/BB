#!/usr/bin/env python3
"""Diff a built page against its Figma render, and say WHERE it differs.

    python3 pagediff.py <name> <figma.png> <build.png>

A whole-page RMSE is useless here: the design's Stack Sans is not installed, so
every page sits around 28 on font substitution alone and that swamps anything
structural. What separates the two is SHAPE — substitution is thousands of tiny
scattered specks, a real fault is one big contiguous region.

So: block the diff into 8px cells, threshold, find connected components, and
report the largest. A region much bigger than the page's median cell-cluster is
worth opening. Also reports a per-band profile so a fault can be located by y
without opening the image.
"""

import sys
from collections import deque

from PIL import Image

CELL = 8
THRESH = 16          # per-channel difference that counts as "different"
CELL_HIT = 0.22      # fraction of a cell's pixels over threshold to light it up


def load_pair(a_path, b_path):
    a = Image.open(a_path).convert('RGB')
    b = Image.open(b_path).convert('RGB')
    if a.size != b.size:
        w = min(a.width, b.width)
        h = min(a.height, b.height)
        a = a.crop((0, 0, w, h))
        b = b.crop((0, 0, w, h))
    return a, b


def cell_grid(a, b):
    """Boolean grid: which 8px cells differ materially."""
    W, H = a.size
    ap, bp = a.load(), b.load()
    cols, rows = W // CELL, H // CELL
    grid = bytearray(cols * rows)
    per_row = []
    for cy in range(rows):
        hits = 0
        for cx in range(cols):
            over = 0
            for y in range(cy * CELL, cy * CELL + CELL, 2):
                for x in range(cx * CELL, cx * CELL + CELL, 2):
                    pa, pb = ap[x, y], bp[x, y]
                    if (abs(pa[0] - pb[0]) > THRESH or abs(pa[1] - pb[1]) > THRESH
                            or abs(pa[2] - pb[2]) > THRESH):
                        over += 1
            if over >= CELL_HIT * (CELL // 2) ** 2:
                grid[cy * cols + cx] = 1
                hits += 1
        per_row.append(hits)
    return grid, cols, rows, per_row


def components(grid, cols, rows):
    seen = bytearray(len(grid))
    out = []
    for i in range(len(grid)):
        if not grid[i] or seen[i]:
            continue
        q, cells = deque([i]), []
        seen[i] = 1
        while q:
            j = q.popleft()
            cells.append(j)
            jy, jx = divmod(j, cols)
            for dy in (-1, 0, 1):
                for dx in (-1, 0, 1):
                    ny, nx = jy + dy, jx + dx
                    if 0 <= ny < rows and 0 <= nx < cols:
                        k = ny * cols + nx
                        if grid[k] and not seen[k]:
                            seen[k] = 1
                            q.append(k)
        ys = [c // cols for c in cells]
        xs = [c % cols for c in cells]
        out.append((len(cells), min(ys) * CELL, max(ys) * CELL,
                    min(xs) * CELL, max(xs) * CELL))
    out.sort(reverse=True)
    return out


def main():
    name, fig, build = sys.argv[1], sys.argv[2], sys.argv[3]
    a, b = load_pair(fig, build)
    grid, cols, rows, per_row = cell_grid(a, b)
    lit = sum(grid)
    comps = components(grid, cols, rows)
    total = cols * rows

    print(f'{name}: {a.size[0]}x{a.size[1]}  cells lit {lit}/{total} '
          f'({100.0 * lit / total:.1f}%)  regions {len(comps)}')
    if comps:
        med = sorted(c[0] for c in comps)[len(comps) // 2]
        print(f'   median region {med} cells; largest:')
        for n, y0, y1, x0, x1 in comps[:6]:
            tag = '  <<< OPEN THIS' if n > max(40, med * 8) else ''
            print(f'     {n:6d} cells   y {y0:6d}-{y1:<6d} x {x0:5d}-{x1:<5d}{tag}')
    band = 64
    bands = [(sum(per_row[i:i + band]), i * CELL) for i in range(0, rows, band)]
    bands.sort(reverse=True)
    print('   densest bands:', ', '.join(f'y{y}:{n}' for n, y in bands[:4]))


if __name__ == '__main__':
    main()
