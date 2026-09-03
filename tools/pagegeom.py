#!/usr/bin/env python3
"""Measure every top-level section of a built page, in document order.

    python3 tools/pagegeom.py website/index.html

Prints `y -> end  h  selector` for each child of <main>, plus the header and
footer, and the page's total height. That is the same shape get_metadata
reports for the Figma frame's rows, so the two lists can be diffed directly.
"""
import json, pathlib, re, subprocess, sys, tempfile

CHROME = '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'
ROOT = pathlib.Path(__file__).resolve().parents[1]

PROBE = """
<script>
window.addEventListener('load', function () {
  function run() {
    var out = [], y0 = 0;
    var main = document.querySelector('main');
    var rows = [];
    document.querySelectorAll('body > *').forEach(function (el) {
      if (el.tagName === 'SCRIPT') return;
      if (el === main) {
        main.children.length && Array.prototype.forEach.call(main.children, function (c) { rows.push(c); });
      } else rows.push(el);
    });
    rows.forEach(function (el) {
      var b = el.getBoundingClientRect();
      out.push([el.tagName.toLowerCase() + '.' + (typeof el.className === 'string' ? el.className.trim().split(/\\s+/).join('.') : ''),
                Math.round(b.top + window.scrollY), Math.round(b.height)]);
    });
    out.push(['<PAGE>', 0, Math.round(document.documentElement.scrollHeight)]);
    document.title = 'PROBE' + JSON.stringify(out);
  }
  if (document.fonts && document.fonts.ready) document.fonts.ready.then(run); else run();
});
</script>
"""


def main():
    src = pathlib.Path(sys.argv[1])
    html = src.read_text()
    html = html.replace('</body>', PROBE + '</body>')
    tmp = tempfile.NamedTemporaryFile('w', dir=src.parent, suffix='.html',
                                      prefix='_geom-', delete=False)
    tmp.write(html); tmp.close()
    try:
        res = subprocess.run([CHROME, '--headless', '--disable-gpu', '--hide-scrollbars',
                              '--window-size=1600,1200', '--dump-dom',
                              '--virtual-time-budget=8000', 'file://' + tmp.name],
                             capture_output=True, text=True, timeout=180)
        m = re.search(r'<title>PROBE(.*?)</title>', res.stdout, re.S)
        if not m:
            sys.exit('pagegeom: no measurement came back')
        rows = json.loads(m.group(1))
    finally:
        pathlib.Path(tmp.name).unlink(missing_ok=True)

    for sel, y, h in rows[:-1]:
        print(f'  y={y:8d} -> {y + h:8d}  h={h:7d}  {sel[:70]}')
    print(f'  PAGE {rows[-1][2]}')


if __name__ == '__main__':
    main()
