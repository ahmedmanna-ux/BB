/* =============================================================
   BuddyBoss — Features (Top Modules)
   Scroll reveals, hero scaling, sticky header, mobile nav.
   No dependencies.
   ============================================================= */
(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------
     1. Sticky header shadow
     --------------------------------------------------------- */
  var header = document.getElementById('siteHeader');
  var lastStuck = null;
  function onScrollHeader() {
    var stuck = window.scrollY > 8;
    if (stuck !== lastStuck) {
      header.classList.toggle('is-stuck', stuck);
      lastStuck = stuck;
    }
  }
  window.addEventListener('scroll', onScrollHeader, { passive: true });
  onScrollHeader();

  /* ---------------------------------------------------------
     2. Mobile nav
     --------------------------------------------------------- */
  var toggle = document.getElementById('navToggle');
  var nav = document.getElementById('siteNav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      document.body.classList.toggle('nav-open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    nav.addEventListener('click', function (e) {
      if (e.target.closest('a')) {
        nav.classList.remove('is-open');
        document.body.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) {
        nav.classList.remove('is-open');
        document.body.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
      }
    });
  }

  /* ---------------------------------------------------------
     2b. Nav dropdown
        Click to open, click-away or Escape to close. Hover opens it
        too on pointer devices, but only as a shortcut — the click
        behaviour is what keyboard and touch rely on.
     --------------------------------------------------------- */
  Array.prototype.forEach.call(document.querySelectorAll('[data-navdrop]'), function (drop) {
    var btn = drop.querySelector('.navdrop__toggle');
    var menu = drop.querySelector('.navdrop__menu');
    if (!btn || !menu) return;
    var hoverable = window.matchMedia('(hover: hover)').matches;

    function open(state) {
      drop.classList.toggle('is-open', state);
      btn.setAttribute('aria-expanded', state ? 'true' : 'false');
      menu.hidden = !state;
    }

    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      open(menu.hidden);
    });

    if (hoverable) {
      drop.addEventListener('mouseenter', function () { open(true); });
      drop.addEventListener('mouseleave', function () { open(false); });
    }

    document.addEventListener('click', function (e) {
      if (!drop.contains(e.target)) open(false);
    });

    drop.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !menu.hidden) { open(false); btn.focus(); }
    });

    /* leaving the last item with Tab should close it behind you */
    menu.addEventListener('focusout', function () {
      window.setTimeout(function () {
        if (!drop.contains(document.activeElement)) open(false);
      }, 0);
    });
  });

  /* ---------------------------------------------------------
     3. Hero — scale the 1600px design frame down to the viewport
        so the floating cards keep their exact Figma positions.
        Below 1100px the CSS switches to a reflowed stacked hero
        and this bows out.
     --------------------------------------------------------- */
  var stage = document.getElementById('heroStage');
  var HERO_W = 1600, HERO_H = 566, HERO_MIN = 1100;

  function sizeHero() {
    if (!stage) return;
    var vw = document.documentElement.clientWidth;
    if (vw < HERO_MIN) {
      stage.style.transform = '';
      stage.parentNode.style.height = '';
      stage.classList.remove('is-scaled');
      return;
    }
    var scale = Math.min(1, vw / HERO_W);
    stage.classList.add('is-scaled');
    stage.style.transform = 'translateX(-50%) scale(' + scale + ')';
    stage.parentNode.style.height = Math.round(HERO_H * scale) + 'px';
  }
  sizeHero();
  window.addEventListener('resize', sizeHero, { passive: true });
  window.addEventListener('orientationchange', sizeHero);

  /* ---------------------------------------------------------
     4. Scroll reveals
     --------------------------------------------------------- */
  var revealables = document.querySelectorAll('[data-reveal], [data-stagger]');

  if (reduced || !('IntersectionObserver' in window)) {
    revealables.forEach(function (el) { el.classList.add('is-visible'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

    revealables.forEach(function (el) { io.observe(el); });

    /* anything already in view on load shows immediately */
    requestAnimationFrame(function () {
      revealables.forEach(function (el) {
        var r = el.getBoundingClientRect();
        if (r.top < window.innerHeight * 0.9) {
          el.classList.add('is-visible');
          io.unobserve(el);
        }
      });
    });

    /* printing must never lose content that hasn't been scrolled to */
    window.addEventListener('beforeprint', function () {
      document.documentElement.classList.add('reveal-all');
    });
  }

  /* ?reveal — show everything at once (full-page screenshots / QA) */
  if (/[?&]reveal\b/.test(location.search)) {
    document.documentElement.classList.add('reveal-all');
  }

  /* ---------------------------------------------------------
     5. Stat counters
     --------------------------------------------------------- */
  var nums = document.querySelectorAll('[data-count]');
  function formatNum(n) { return n.toLocaleString('en-US'); }

  function runCount(el) {
    var target = parseInt(el.getAttribute('data-count'), 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var dur = 1400, start = null;
    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min(1, (ts - start) / dur);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = formatNum(Math.round(target * eased)) + suffix;
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var showAll = /[?&]reveal\b/.test(location.search);

  if (!reduced && !showAll && 'IntersectionObserver' in window && nums.length) {
    var io2 = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        runCount(entry.target);
        io2.unobserve(entry.target);
      });
    }, { threshold: 0.6 });
    nums.forEach(function (el) { io2.observe(el); });
  }

  /* ---------------------------------------------------------
     6. App screen carousel
        Coverflow: the active screen sits centre, the other two
        flank it. Autoplays, pauses on hover / focus / tab-hide /
        when scrolled out of view, and is driven by the dots.
     --------------------------------------------------------- */
  function initCarousel(stage) {
    var track = stage.querySelector('.phones__track');
    var slides = Array.prototype.slice.call(stage.querySelectorAll('.phone-set'));
    if (!track || slides.length < 2) return;

    var frame = stage.parentNode;
    var count = slides.length;
    var active = parseInt(stage.getAttribute('data-start'), 10) || 0;
    var delay = parseInt(stage.getAttribute('data-autoplay'), 10) || 4500;
    var timer = null;
    var paused = false;
    var onScreen = true;

    /* dots */
    var dots = document.createElement('div');
    dots.className = 'phones__dots';
    dots.setAttribute('role', 'tablist');
    dots.setAttribute('aria-label', 'Choose an app screen');

    var buttons = slides.map(function (slide, i) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'phones__dot';
      b.setAttribute('role', 'tab');
      b.setAttribute('aria-label', 'App screens, set ' + (i + 1) + ' of ' + slides.length);
      b.addEventListener('click', function () { go(i); restart(); });
      dots.appendChild(b);
      return b;
    });

    dots.addEventListener('keydown', function (e) {
      if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
      e.preventDefault();
      var next = (active + (e.key === 'ArrowRight' ? 1 : count - 1)) % count;
      go(next); restart(); buttons[next].focus();
    });

    frame.appendChild(dots);

    function go(i) {
      active = ((i % count) + count) % count;
      /* one translate moves the whole trio — all three phones change together */
      track.style.transform = 'translateX(' + (-active * 100) + '%)';
      slides.forEach(function (slide, n) {
        slide.setAttribute('aria-hidden', n === active ? 'false' : 'true');
      });
      buttons.forEach(function (b, n) {
        b.setAttribute('aria-selected', n === active ? 'true' : 'false');
        b.tabIndex = n === active ? 0 : -1;
      });
    }

    function tick() { go(active + 1); }

    function play() {
      stop();
      if (reduced || paused || !onScreen || document.hidden) return;
      timer = window.setInterval(tick, delay);
    }
    function stop() { if (timer) { window.clearInterval(timer); timer = null; } }
    function restart() { play(); }

    /* hover / focus hold */
    ['mouseenter', 'focusin'].forEach(function (ev) {
      frame.addEventListener(ev, function () { paused = true; stop(); });
    });
    ['mouseleave', 'focusout'].forEach(function (ev) {
      frame.addEventListener(ev, function () { paused = false; play(); });
    });
    frame.addEventListener('touchstart', function () { paused = true; stop(); }, { passive: true });

    document.addEventListener('visibilitychange', function () {
      if (document.hidden) stop(); else play();
    });

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) {
        onScreen = entries[0].isIntersecting;
        if (onScreen) play(); else stop();
      }, { threshold: 0.25 }).observe(frame);
    }

    go(active);
    play();
  }

  Array.prototype.forEach.call(document.querySelectorAll('[data-carousel]'), initCarousel);

  /* NOTE: no parallax on the product panels. Any translate needs a
     compensating scale, and that re-crops the exported Figma artwork —
     the framing has to stay pixel-identical to the design. */
})();
