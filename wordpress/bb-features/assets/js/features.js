/* =============================================================
   BB Features — front-end behaviour
   Scroll reveals, hero framing, stat counters, app carousel.
   Drives both scopes: .bbf (Features page) and .bbm (module pages).

   Front end only: functions.php never enqueues this in the editor,
   and the reveal start state is scoped to `html.js`, which this file
   adds. That is what keeps every section visible while editing.
   No dependencies.
   ============================================================= */
(function () {
  'use strict';

  var root = document.documentElement;
  if (!document.querySelector('.bbf, .bbm')) { return; }

  root.classList.add('js');

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------
     1. Hero — scale the 1600px design frame to the viewport so
        the floating cards keep their exact Figma coordinates.
        Under 1100px the CSS reflows it and this bows out.
     --------------------------------------------------------- */
  var HERO_W = 1600, HERO_BAND = 680, HERO_MIN = 1100;
  /* the band is 680 in the design and the bar overlays its top, so the part
     this script sizes is whatever the bar leaves — kept as the same sum the
     stylesheet does so the two can never disagree */
  var HEADER_H = parseInt(
    getComputedStyle(root).getPropertyValue('--bbf-header-h'), 10) || 72;
  var HERO_H = HERO_BAND - HEADER_H;
  var stages = document.querySelectorAll('.bbf-hero__stage');

  function sizeHeroes() {
    var vw = root.clientWidth;

    Array.prototype.forEach.call(stages, function (stage) {
      var hero = stage.parentNode;

      if (vw < HERO_MIN) {
        stage.style.transform = '';
        stage.classList.remove('is-scaled');
        hero.style.height = '';
        return;
      }

      var scale = Math.min(1, vw / HERO_W);
      stage.classList.add('is-scaled');
      stage.style.transform = 'translateX(-50%) scale(' + scale + ')';
      hero.style.height = Math.round(HERO_H * scale) + 'px';
    });
  }

  if (stages.length) {
    /* the hero needs a positioning context for the absolute stage */
    Array.prototype.forEach.call(stages, function (stage) {
      stage.parentNode.style.position = 'relative';
    });
    sizeHeroes();
    window.addEventListener('resize', sizeHeroes, { passive: true });
    window.addEventListener('orientationchange', sizeHeroes);
  }

  /* ---------------------------------------------------------
     2. Scroll reveals
     --------------------------------------------------------- */
  var revealables = document.querySelectorAll('.bbf .bbf-reveal, .bbf .bbf-stagger, .bbm .bbm-reveal, .bbm .bbm-stagger, .bbm.bbm-reveal, .bbm.bbm-stagger');

  if (reduced || !('IntersectionObserver' in window)) {
    Array.prototype.forEach.call(revealables, function (el) { el.classList.add('is-visible'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) { return; }
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

    Array.prototype.forEach.call(revealables, function (el) { io.observe(el); });

    /* whatever is already on screen at load shows straight away */
    requestAnimationFrame(function () {
      Array.prototype.forEach.call(revealables, function (el) {
        if (el.getBoundingClientRect().top < window.innerHeight * 0.9) {
          el.classList.add('is-visible');
          io.unobserve(el);
        }
      });
    });

    /* printing must not lose sections nobody scrolled to */
    window.addEventListener('beforeprint', function () { root.classList.add('reveal-all'); });
  }

  /* ---------------------------------------------------------
     3. Stat counters
     --------------------------------------------------------- */
  var nums = document.querySelectorAll('.bbf .bbf-stat__num');

  /* The target is read from the rendered text ("65,000+") rather than a
     data-* attribute, so editors can change the number in Gutenberg and
     the count-up follows without touching any code. */
  function runCount(el) {
    var parts = el.textContent.trim().match(/^([\d.,\s]+)(.*)$/);
    if (!parts) { return; }

    var target = parseInt(parts[1].replace(/[^\d]/g, ''), 10);
    var suffix = parts[2] || '';
    if (!target || target < 2) { return; }

    var dur = 1400;
    var start = null;

    function step(ts) {
      if (start === null) { start = ts; }
      var p = Math.min(1, (ts - start) / dur);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(target * eased).toLocaleString('en-US') + suffix;
      if (p < 1) { requestAnimationFrame(step); }
    }
    requestAnimationFrame(step);
  }

  var showAll = /[?&]reveal\b/.test(window.location.search);

  if (!reduced && !showAll && 'IntersectionObserver' in window && nums.length) {
    var countIo = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) { return; }
        runCount(entry.target);
        countIo.unobserve(entry.target);
      });
    }, { threshold: 0.6 });

    Array.prototype.forEach.call(nums, function (el) { countIo.observe(el); });
  }


  /* ?reveal — show everything at once (screenshots / QA) */
  if (/[?&]reveal\b/.test(window.location.search)) {
    root.classList.add('reveal-all');
  }

  /* ---------------------------------------------------------
     Integrations tabs
        Five states: the logo overview the section is drawn
        with, then the four integration tabs. A dot swaps the
        head, the slide and the shell's stroke together.
     --------------------------------------------------------- */
  Array.prototype.forEach.call(document.querySelectorAll('.bbf-integrations'), function (car) {
    var section = car.closest('.bbf');
    if (!section) return;
    var heads  = section.querySelectorAll('.bbf-integrations__heads > .bbf-head');
    var slides = car.querySelectorAll('.bbf-integrations__slide');
    var dots   = car.querySelectorAll('.bbf-integrations__dot');
    if (slides.length < 2) return;

    var at = 0;

    function show(i) {
      at = (i + slides.length) % slides.length;
      Array.prototype.forEach.call(slides, function (el, n) {
        el.classList.toggle('is-current', n === at);
      });
      Array.prototype.forEach.call(heads, function (el, n) {
        el.classList.toggle('is-current', n === at);
      });
      Array.prototype.forEach.call(dots, function (el, n) {
        el.classList.toggle('is-active', n === at);
        el.setAttribute('aria-current', n === at ? 'true' : 'false');
      });
      var cur = slides[at];
      car.classList.toggle('bbf-integrations--blue',  cur.classList.contains('bbf-integrations__slide--blue'));
      car.classList.toggle('bbf-integrations--green', cur.classList.contains('bbf-integrations__slide--green'));
    }

    Array.prototype.forEach.call(dots, function (dot, n) {
      dot.addEventListener('click', function () { show(n); });
    });
    var prev = car.querySelector('.bbf-integrations__arrow--prev');
    var next = car.querySelector('.bbf-integrations__arrow--next');
    if (prev) prev.addEventListener('click', function () { show(at - 1); });
    if (next) next.addEventListener('click', function () { show(at + 1); });

    show(0);
  });

})();
