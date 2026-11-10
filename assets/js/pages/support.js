/* Support page: tabs and enquiry forms */

(function () {
    /* generic tabs: buttons with aria-controls inside a .tabs bar */
    function tabs(bar, onchange) {
        var bs = [].slice.call(bar.querySelectorAll('[role=tab]'));
        function sel(b, focus) {
            bs.forEach(function (x) {
                var on = x === b; x.setAttribute('aria-selected', on); x.tabIndex = on ? 0 : -1;
                document.getElementById(x.getAttribute('aria-controls')).hidden = !on;
            });
            if (focus) b.focus(); if (onchange) onchange(b);
        }
        bs.forEach(function (b, i) {
            b.addEventListener('click', function () { sel(b) });
            b.addEventListener('keydown', function (e) {
                if (e.key === 'ArrowRight') { e.preventDefault(); sel(bs[(i + 1) % bs.length], true) }
                if (e.key === 'ArrowLeft') { e.preventDefault(); sel(bs[(i - 1 + bs.length) % bs.length], true) }
            });
        });
        return sel;
    }
    var bars = document.querySelectorAll('.tabs');
    tabs(bars[0]);
    var selJoin = tabs(bars[1]);
    document.getElementById('tocsr').addEventListener('click', function () { selJoin(document.getElementById('t-par')) });
    if (location.hash === '#partner') { selJoin(document.getElementById('t-par')) }
})();

/* ---------- forms: validate, then open the visitor's email app with the message filled in (no server yet) ---------- */
(function () {
    var TO = 'uttarayana.faith@gmail.com';
    document.querySelectorAll('form.fm').forEach(function (f) {
        f.addEventListener('submit', function (e) {
            e.preventDefault();
            var ok = true, first = null, msg = f.querySelector('.msg');
            f.querySelectorAll('[required]').forEach(function (i) {
                var er = i.parentNode.querySelector('.er'), bad = !i.value.trim() || (i.type === 'email' && !/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(i.value.trim()));
                i.setAttribute('aria-invalid', bad); er.textContent = bad ? (i.type === 'email' ? 'Enter a valid email address.' : 'This field is required.') : '';
                if (bad) { ok = false; first = first || i }
            });
            if (!ok) { first.focus(); msg.textContent = ''; return }
            var lines = [];
            f.querySelectorAll('input,select,textarea').forEach(function (i) { if (i.value.trim()) lines.push(i.name + ': ' + i.value.trim()) });
            var name = (f.querySelector('[name=Name],[name=Organisation]') || {}).value || '';
            var url = 'mailto:' + TO + '?subject=' + encodeURIComponent(f.dataset.kind + ' enquiry from ' + name) + '&body=' + encodeURIComponent(lines.join('\n'));
            msg.textContent = 'Thank you. Your email app should open with your message ready to send. If it does not, write to ' + TO + '.';
            location.href = url;
        });
        f.addEventListener('input', function (e) { if (e.target.getAttribute('aria-invalid') === 'true') { e.target.setAttribute('aria-invalid', 'false'); var er = e.target.parentNode.querySelector('.er'); if (er) er.textContent = '' } });
    });
})();
