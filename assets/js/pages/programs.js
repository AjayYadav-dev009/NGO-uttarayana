/* Programs page: journey timeline dots and photo lightbox */

/* ---------- journey: dots fill as items scroll into view ---------- */
(function () {
    var items = [].slice.call(document.querySelectorAll('#jv li'));
    if (!('IntersectionObserver' in window)) { items.forEach(function (i) { i.classList.add('on') }); return }
    var io = new IntersectionObserver(function (l) { l.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('on'); io.unobserve(e.target) } }) }, { rootMargin: '0px 0px -25% 0px' });
    items.forEach(function (i) { io.observe(i) });
})();

/* ---------- lightbox ---------- */
(function () {
    var zs = [].slice.call(document.querySelectorAll('.zm')), dlg = document.getElementById('lb'), im = document.getElementById('li'), cp = document.getElementById('lc'), cur = 0, last = null;
    function show(i) {
        cur = (i + zs.length) % zs.length; var z = zs[cur], g = z.querySelector('img');
        im.src = g.src; im.alt = g.alt; cp.textContent = z.dataset.cap || g.alt;
    }
    zs.forEach(function (z, i) { z.addEventListener('click', function () { last = z; show(i); if (!dlg.open) dlg.showModal() }) });
    document.getElementById('lp').addEventListener('click', function () { show(cur - 1) });
    document.getElementById('ln').addEventListener('click', function () { show(cur + 1) });
    document.getElementById('lx').addEventListener('click', function () { dlg.close() });
    dlg.addEventListener('click', function (e) { if (e.target === dlg) dlg.close() });
    dlg.addEventListener('keydown', function (e) { if (e.key === 'ArrowRight') show(cur + 1); if (e.key === 'ArrowLeft') show(cur - 1) });
    dlg.addEventListener('close', function () { if (last) last.focus() });
})();
