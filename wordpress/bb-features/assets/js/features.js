/* =============================================================
   BB Features — front-end behaviour
   Scroll reveals, hero framing, stat counters, app carousel.

   Front end only: functions.php never enqueues this in the editor,
   and the reveal start state is scoped to `html.js`, which this file
   adds. That is what keeps every section visible while editing.
   No dependencies.
   ============================================================= */
(function () {
  'use strict';

  var root = document.documentElement;
  if (!document.querySelector('.bbf')) { return; }

  root.classList.add('js');

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------
     1. Hero — scale the 1600px design frame to the viewport so
        the floating cards keep their exact Figma coordinates.
        Under 1100px the CSS reflows it and this bows out.
     --------------------------------------------------------- */
  var HERO_W = 1600, HERO_H = 566, HERO_MIN = 1100;
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
  var revealables = document.querySelectorAll('.bbf .bbf-reveal, .bbf .bbf-stagger');

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

  /* ---------------------------------------------------------
     4. App screen carousel
        Coverflow: the active screen sits centre, the others
        flank it. Autoplays; pauses on hover, focus, touch,
        tab-hide and when scrolled out of view.
     --------------------------------------------------------- */
  function initCarousel(stage) {
    var track = stage.querySelector('.bbf-phones__track');
    var slides = Array.prototype.slice.call(stage.querySelectorAll('.bbf-phone-set'));
    if (!track || slides.length < 2) { return; }

    var frame = stage.parentNode;
    var count = slides.length;
    var active = 0;
    var delay = 4500;
    var timer = null;
    var paused = false;
    var onScreen = true;

    var dots = document.createElement('div');
    dots.className = 'bbf-phones__dots';
    dots.setAttribute('role', 'tablist');
    dots.setAttribute('aria-label', 'Choose an app screen');

    var buttons = slides.map(function (slide, i) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'bbf-phones__dot';
      b.setAttribute('role', 'tab');
      b.setAttribute('aria-label', 'App screens, set ' + (i + 1) + ' of ' + count);
      b.addEventListener('click', function () { go(i); play(); });
      dots.appendChild(b);
      return b;
    });

    dots.addEventListener('keydown', function (e) {
      if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') { return; }
      e.preventDefault();
      var next = (active + (e.key === 'ArrowRight' ? 1 : count - 1)) % count;
      go(next); play(); buttons[next].focus();
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

    function stop() {
      if (timer) { window.clearInterval(timer); timer = null; }
    }

    function play() {
      stop();
      if (reduced || paused || !onScreen || document.hidden) { return; }
      timer = window.setInterval(function () { go(active + 1); }, delay);
    }

    ['mouseenter', 'focusin'].forEach(function (ev) {
      frame.addEventListener(ev, function () { paused = true; stop(); });
    });
    ['mouseleave', 'focusout'].forEach(function (ev) {
      frame.addEventListener(ev, function () { paused = false; play(); });
    });
    frame.addEventListener('touchstart', function () { paused = true; stop(); }, { passive: true });

    document.addEventListener('visibilitychange', function () {
      if (document.hidden) { stop(); } else { play(); }
    });

    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) {
        onScreen = entries[0].isIntersecting;
        if (onScreen) { play(); } else { stop(); }
      }, { threshold: 0.25 }).observe(frame);
    }

    go(active);
    play();
  }

  Array.prototype.forEach.call(document.querySelectorAll('.bbf .bbf-carousel'), initCarousel);

  /* ?reveal — show everything at once (screenshots / QA) */
  if (/[?&]reveal\b/.test(window.location.search)) {
    root.classList.add('reveal-all');
  }
})();
