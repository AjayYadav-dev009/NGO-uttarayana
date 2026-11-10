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