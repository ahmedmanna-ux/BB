#!/usr/bin/env python3
"""Render one section fragment on its own and report every box it draws.

    python3 tools/probe.py website/home-parts/07-facts.html \
        --css website/home-parts/07-facts.css --width 1600

Prints the section's own height first — that is the number to compare against
the Figma frame — then one line per element that carries a class, with its box
measured RELATIVE TO THE SECTION, which is the coordinate space Figma reports.

Why a separate harness rather than eyeballing the built page: a section built
in isolation and a section built in place can differ by the margin its
neighbour contributes, and a whole-page screenshot hides which of the two you
are looking at. Measuring the fragment alone makes the section's own geometry
falsifiable on its own terms.

--screenshot writes a PNG of the section at 1:1 instead, for diffing against a
Figma export of the same node.
"""

import argparse
import json
import pathlib
import re
import subprocess
import sys
import tempfile

CHROME = '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'
ROOT = pathlib.Path(__file__).resolve().parents[1]

PROBE = r"""
<script>
window.addEventListener('load', function () {
  function run() {
    var root = document.querySelector('main').firstElementChild;
    var rb = root.getBoundingClientRect();
    var out = [];
    var all = root.querySelectorAll('*');
    out.push(['<root>', 0, 0, Math.round(rb.width), Math.round(rb.height)]);
    for (var i = 0; i < all.length; i++) {
      var el = all[i];
      if (!el.className || typeof el.className !== 'string') continue;
      var b = el.getBoundingClientRect();
      if (!b.width && !b.height) continue;
      out.push([el.tagName.toLowerCase() + '.' + el.className.trim().split(/\s+/).join('.'),
                Math.round(b.left - rb.left), Math.round(b.top - rb.top),
                Math.round(b.width), Math.round(b.height)]);
    }
    document.title = 'PROBE' + JSON.stringify(out);
  }
  if (document.fonts && document.fonts.ready) document.fonts.ready.then(run); else run();
});
</script>
"""

HEAD = """<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
{extra}
<style>
  /* the fragment is measured with no neighbours, so nothing may contribute a
     margin the real page would collapse away */
  body {{ margin: 0; }}
  main > * {{ margin-top: 0 !important; }}
</style>
</head><body><main class="{mainclass}">
"""


def build_page(fragment: str, css_files, mainclass: str) -> str:
    extra = '\n'.join(
        f'<link rel="stylesheet" href="{pathlib.Path(c).resolve().relative_to((ROOT / "website").resolve())}">'
        for c in css_files)
    return (HEAD.format(extra=extra, mainclass=mainclass) + fragment
            + '</main>' + PROBE + '</body></html>')


def render(page: str, site: pathlib.Path, width: int, screenshot=None,
           shot_height: int = 400):
    tmp = tempfile.NamedTemporaryFile('w', dir=site, suffix='.html',
                                      prefix='_probe-', delete=False)
    tmp.write(page)
    tmp.close()
    try:
        if screenshot:
            subprocess.run([CHROME, '--headless', '--disable-gpu', '--hide-scrollbars',
                            f'--window-size={width},{shot_height}',
                            '--screenshot=' + str(screenshot),
                            '--virtual-time-budget=6000', '--default-background-color=00000000',
                            'file://' + tmp.name], capture_output=True, timeout=120)
        res = subprocess.run([CHROME, '--headless', '--disable-gpu', '--hide-scrollbars',
                              f'--window-size={width},2400', '--dump-dom',
                              '--virtual-time-budget=6000', 'file://' + tmp.name],
                             capture_output=True, text=True, timeout=120)
        m = re.search(r'<title>PROBE(.*?)</title>', res.stdout, re.S)
        if not m:
            sys.exit('probe: no measurement came back — check the fragment parses\n'
                     + res.stdout[:600] + res.stderr[:600])
        return json.loads(m.group(1))
    finally:
        pathlib.Path(tmp.name).unlink(missing_ok=True)


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument('fragment')
    ap.add_argument('--css', action='append', default=[])
    ap.add_argument('--width', type=int, default=1600)
    ap.add_argument('--mainclass', default='hp')
    ap.add_argument('--screenshot')
    ap.add_argument('--grep', help='only print rows whose selector matches this regex')
    args = ap.parse_args()

    site = ROOT / 'website'
    frag = pathlib.Path(args.fragment).read_text()
    page = build_page(frag, args.css, args.mainclass)
    boxes = render(page, site, args.width)
    root = boxes[0]
    if args.screenshot:
        # shoot at the measured height, so the viewport is exactly the section
        render(page, site, args.width, args.screenshot, shot_height=root[4])
    print(f'section  {root[3]} x {root[4]}')
    pat = re.compile(args.grep) if args.grep else None
    for sel, x, y, w, h in boxes[1:]:
        if pat and not pat.search(sel):
            continue
        print(f'  {x:5d} {y:5d} {w:5d} {h:5d}  {sel[:110]}')


if __name__ == '__main__':
    main()
