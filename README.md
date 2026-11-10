# Uttarayana Foundation – PHP site

Requires PHP 7.4+. Run locally: `php -S localhost:8000` in this folder.

```
config.php            site name, phone/email, nav, footer details  (edit once, applies everywhere)
includes/
  init.php            loads config + helpers
  functions.php       url(), asset(), e()
  head.php            <head> (global.css + page css, font preloads)
  header.php          top bar + nav (+ page banner and "on this page" menu on inner pages)
  footer.php          footer + scripts (main.js + page js)
index.php about.php programs.php support.php    page content only
assets/
  css/global.css      everything shared (fonts, layout, header, footer, components)
  css/pages/*.css     styles used by one page only
  js/main.js          menu, scroll-spy, counters, copy buttons, sliders
  js/pages/*.js       about / programs / support specific scripts
  fonts/              self-hosted Mukta (see fonts/README.txt – files must be added)
  img/                people / programs / support photos
```

## Adding a page
1. Copy `support.php` to `newpage.php`, change the `$page` array and the content.
2. Add the page to `NAV` in `config.php`.
3. Need extra CSS/JS? Create `assets/css/pages/newpage.css` / `assets/js/pages/newpage.js` and list the name in `'css'` / `'js'`.

## Notes
- Links go through `url('about', 'journey')` so you can switch to pretty URLs later in one place (`functions.php`).
- "Contact" has no page yet, so it points to `#`. Set its file in `NAV` once it exists.
- The logo and most news/hero photos still load from assets.zyrosite.com; download them into `assets/img/` and update `SITE_LOGO` + the `<img>` paths when ready.
- Support-page forms still open the visitor's email app (as in the design); a PHP mail handler is the next step.
