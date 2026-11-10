/* Uttarayana Foundation – global behaviour, loaded on every page.
   Each block quietly does nothing when its markup is not on the page. */

/* ---------- Mobile menu (burger button) ---------- */
(function () {
    var b = document.querySelector('.mb'), m = document.getElementById('menu');
    if (!b || !m) return;
    b.addEventListener('click', function () { var o = m.classList.toggle('open'); b.setAttribute('aria-expanded', o) });
})();

/* ---------- Scroll-spy for the "On this page" sub-navigation ---------- */
(function () {
    var links = [].slice.call(document.querySelectorAll('.sn a'));
    if (!links.length) return;
    var map = links.map(function (a) { return document.querySelector(a.getAttribute('href')) });
    function spy() {
        var y = window.scrollY + 190, cur = 0;
        map.forEach(function (s, i) { if (s && s.offsetTop <= y) cur = i });
        if (window.scrollY + innerHeight >= document.documentElement.scrollHeight - 4) cur = map.length - 1;
        links.forEach(function (a, i) { a.classList.toggle('on', i === cur); if (i === cur) a.setAttribute('aria-current', 'true'); else a.removeAttribute('aria-current') });
        var on = links[cur]; if (on && on.parentNode.scrollWidth > on.parentNode.clientWidth) on.parentNode.scrollTo({ left: on.offsetLeft - 24, behavior: 'smooth' });
    }
    addEventListener('scroll', spy, { passive: true }); addEventListener('resize', spy); spy();
})();

/* ---------- Animated counters: any element with class .num and data-target / data-suffix ---------- */
(function () {
    var els = document.querySelectorAll('.num');
    if (!els.length || !('IntersectionObserver' in window) || matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    function run(el) {
        var T = +el.dataset.target, S = el.dataset.suffix || '', D = 1600, t0 = null;
        function st(ts) { if (t0 === null) t0 = ts; var p = Math.min((ts - t0) / D, 1); el.textContent = Math.round(T * (1 - Math.pow(1 - p, 3))).toLocaleString('en-IN') + S; if (p < 1) requestAnimationFrame(st) } requestAnimationFrame(st)
    }
    els.forEach(function (e) { e.textContent = '0' + (e.dataset.suffix || '') });
    var io = new IntersectionObserver(function (l, o) { l.forEach(function (e) { if (e.isIntersecting) { run(e.target); o.unobserve(e.target) } }) }, { threshold: .4 });
    els.forEach(function (e) { io.observe(e) })
})();

/* ---------- Copy-to-clipboard buttons: .cp[data-copy] ---------- */
(function () {
    var msg = document.getElementById('cpmsg');
    document.querySelectorAll('.cp').forEach(function (b) {
        b.addEventListener('click', function () {
            var v = b.dataset.copy;
            function done() { b.textContent = 'Copied'; b.classList.add('ok'); if (msg) msg.textContent = 'Copied'; setTimeout(function () { b.textContent = 'Copy'; b.classList.remove('ok') }, 1600) }
            function fallback() { var t = document.createElement('textarea'); t.value = v; document.body.appendChild(t); t.select(); try { document.execCommand('copy'); done() } catch (e) { } t.remove() }
            if (navigator.clipboard && navigator.clipboard.writeText) navigator.clipboard.writeText(v).then(done, fallback); else fallback();
        });
    });
})();

/* ---------- Sliders: .sl > .tr (track) with .pv / .nx buttons ---------- */
(function () {
    var AUTO = 4000; // autoplay delay in ms (0 turns autoplay off)
    document.querySelectorAll('.sl').forEach(function (sl) {
        var tr = sl.querySelector('.tr'), pv = sl.querySelector('.pv'), nx = sl.querySelector('.nx');
        var down = false, moved = false, sx = 0, s0 = 0;
        tr.querySelectorAll('img,a').forEach(function (el) { el.setAttribute('draggable', 'false') });
        tr.addEventListener('pointerdown', function (e) {
            if (e.pointerType !== 'mouse' || e.button !== 0) return;
            down = true; moved = false; sx = e.clientX; s0 = tr.scrollLeft; tr.classList.add('drag');
        });
        window.addEventListener('pointermove', function (e) {
            if (!down) return; var dx = e.clientX - sx;
            if (Math.abs(dx) > 5) moved = true; tr.scrollLeft = s0 - dx;
        });
        window.addEventListener('pointerup', function () {
            if (!down) return; down = false; tr.classList.remove('drag');
        });
        tr.addEventListener('click', function (e) { if (moved) { e.preventDefault(); e.stopPropagation(); moved = false } }, true);
        function step() { var c = tr.children[0]; return c.getBoundingClientRect().width + (parseFloat(getComputedStyle(tr).columnGap) || 0) }
        function upd() { pv.disabled = tr.scrollLeft <= 2; nx.disabled = tr.scrollLeft + tr.clientWidth >= tr.scrollWidth - 2 }
        pv.addEventListener('click', function () { tr.scrollBy({ left: -step(), behavior: 'smooth' }) });
        nx.addEventListener('click', function () { tr.scrollBy({ left: step(), behavior: 'smooth' }) });
        tr.addEventListener('scroll', upd, { passive: true }); window.addEventListener('resize', upd); upd();
        if (!AUTO || matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var paused = false, visible = false, resume;
        function hold() { paused = true; clearTimeout(resume) }
        function release(d) { clearTimeout(resume); resume = setTimeout(function () { paused = false }, d) }
        sl.addEventListener('mouseenter', hold); sl.addEventListener('mouseleave', function () { release(300) });
        sl.addEventListener('focusin', hold); sl.addEventListener('focusout', function () { release(300) });
        sl.addEventListener('touchstart', hold, { passive: true }); sl.addEventListener('touchend', function () { release(3000) });
        new IntersectionObserver(function (l) { visible = l[0].isIntersecting }, { threshold: .25 }).observe(sl);
        setInterval(function () {
            if (paused || !visible || document.hidden) return;
            if (tr.scrollLeft + tr.clientWidth >= tr.scrollWidth - 2) tr.scrollTo({ left: 0, behavior: 'smooth' });
            else tr.scrollBy({ left: step(), behavior: 'smooth' });
        }, AUTO);
    });
})();
