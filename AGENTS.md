# AGENTS.md: read this first (Uttarayana Foundation website)

This file is the briefing for any AI agent (or developer) working on this project. Read it fully before changing anything. It replaces the need to re-explain the project in every prompt. **After every change, update the "Update log" at the bottom.**

## 1. Project in one paragraph
Website for **Uttarayana Foundation** (NGO, Almora, Uttarakhand; healthcare and girls' education since 1999), built for a client. Plain **PHP 7.4+**, no database, no framework, no build step. Pages share **one header and one footer** (`includes/`), **one global stylesheet** and **one global script**. Fonts are **self-hosted (Mukta)**. The original design was four static HTML pages that were converted to this structure; keep the visual design identical unless the user asks for a change.

## 2. File map

```
config.php              ALL site-wide facts: phone, email, logo, NAV, footer links, registration numbers, addresses, contact/map settings
index.php               Home
about.php               About us
programs.php            Programs & Impact
support.php             Support Us (donate, join/partner forms, transparency)
contact.php             Contact (message form, address, map)
includes/
  init.php              loads config + functions (first line of every page)
  functions.php         e() escape, asset('css/x.css'), url('slug','anchor'), page_title()
  head.php              <head>: meta, title, font preload, global.css + page css
  header.php            top bar, nav, optional page banner ($page['hero']) and "on this page" menu ($page['subnav']), opens <main>
  footer.php            closes </main>, footer, scripts (main.js + page js)
assets/css/global.css           fonts (@font-face), :root colours, base, header, footer, shared components (incl. forms .fm)
assets/css/pages/<page>.css     rules used by ONE page only (index, about, support, contact; programs has none)
assets/js/main.js               shared behaviour (menu, scroll-spy, counters, copy buttons, sliders, form.fm handler)
assets/js/pages/<page>.js       one-page scripts (about, programs, support)
assets/fonts/                   mukta-{latin,devanagari}-{400,600,700}-normal.woff2
assets/img/{people,programs,support}/   local photos
AGENTS.md               this file
```

## 3. Hard rules (do not break)
1. **Never copy the header, footer, `<head>` or scripts into a page.** Pages contain only their own content between `require INC.'/header.php'` and `require INC.'/footer.php'`.
2. **Site-wide text lives in `config.php`** (phone, email, nav, footer, addresses, registration numbers). Never hard-code these in a page. If a fact is needed on a page, add or reuse a constant.
3. **Links:** `<?= url('about', 'journey') ?>` (slug from `NAV`). **Assets:** `<?= asset('img/programs/x.jpg') ?>`. Never type `about.php` or `/assets/...` by hand (the site must work in a sub-folder).
4. **Escape output:** `e($value)` for anything dynamic. Static HTML text is fine as is.
5. **CSS placement:** used by 2+ pages → `global.css`. Used by one page → `assets/css/pages/<page>.css` and list it in that page's `$page['css']`. Reuse existing classes (section 5) before writing new ones. Use the colour variables, never raw hex for brand colours.
6. **JS placement:** same rule. Shared → `main.js` (guard every block so it does nothing when its markup is absent). One page → `assets/js/pages/<page>.js` and list in `$page['js']`.
7. **No inline `<style>` or `<script>` blocks in pages**, no CDN fonts, no jQuery, no frameworks.
8. **Accessibility is part of the design:** keep `alt` text, labels on inputs, `aria-current`, the `.sr` text next to animated counters, focus outlines. New images need `alt`.
9. **Do not touch** `includes/*` unless the header/footer/head itself must change. Do not rename existing classes or IDs (CSS and JS depend on them).
10. Keep Hindi text (`हिन्दी`) and the ₹ sign working: the Devanagari font files are required.

## 4. Page template (copy `support.php` or `contact.php`)

```php
<?php
require __DIR__ . '/includes/init.php';

$page = [
    'slug'        => 'contact',               // must match the key in NAV (config.php)
    'title'       => 'Contact',               // tab title; " – Uttarayana Foundation" prefix is added
    'description' => '...',                   // meta description, 1 sentence
    'hero'        => ['crumb' => 'Contact', 'title' => 'Get in touch', 'lead' => '...'],  // purple banner (omit on Home)
    'subnav'      => ['message' => 'Send a message', 'find' => 'Find us'],   // anchor id => label (optional)
    'css'         => ['contact'],             // assets/css/pages/contact.css
    'js'          => [],                      // assets/js/pages/*.js
];
require INC . '/header.php';
?>
<section id="message"> <div class="w"> ... </div> </section>
<?php require INC . '/footer.php'; ?>
```

Every `<section>` is `<section id="..."><div class="w">…</div></section>`. `.w` is the 1200px centred container. Section ids must match the `subnav` keys.

## 5. Design system (reuse these)

**Colours (`:root` in global.css):** `--p` #5b2d9e purple · `--pd` #2f1a54 dark purple · `--pl` #f4f0fb light purple · `--o` #e8730c orange (action buttons) · `--ink` #222 headings · `--g` #555 body · `--ln` #e2dcef borders.
**Font:** Mukta 17px/1.6 (400/600/700). Headings: h1–h4 `--ink`; `h2` is purple 34px.
**Section rhythm:** `section{padding:72px 0}` (48px on mobile ≤860px). Alternate backgrounds with `style="background:var(--pl)"`. Breakpoints: 860px (main), 480px (small), 1100px (index impact grid).

| Need | Use |
|---|---|
| Container | `.w` |
| Intro line under a heading | `p.sub` |
| Big intro paragraph | `p.lead` |
| Buttons | `.btn` (orange) · `.btn.p` (purple) · `.btn.o` (outline on dark) |
| Purple call-to-action band with 3 links | `.inv` with `.row` (links Donate / Volunteer / Partner) |
| Stat tiles | `.grid8` (+ `.three` for 3 cols, `.ten` index only) containing `.t`; animated number: `<span class="num" data-target="250" data-suffix="+" aria-hidden="true">250+</span><span class="sr">250+</span>` |
| Page banner + breadcrumb | `$page['hero']` (renders `.ph`, `.crumb`) |
| "On this page" sticky menu | `$page['subnav']` (renders `.sn`; scroll-spy in main.js) |
| Card slider | `.sl` > `.tr` with `.pg` (programme cards) or `.nw` (news cards) + `.pv`/`.nx` buttons |
| Program rows | `.pr` (+ `.alt`, `.rev`), `.media`, `.trio` |
| Photo with lightbox | `<button class="zm" data-cap="...">` wrapping an `img`; needs the `<dialog id="lb">` markup from programs.php and `programs.js` behaviour |
| Journey/timeline list | `.jv` (`#jv li` dots fill on scroll) |
| Copy-to-clipboard row | `.rw` with `<button class="cp" data-copy="VALUE">Copy</button>` and `<p id="cpmsg" role="status" class="sr">` somewhere on the page |
| Tabs | `.tabs` with `role=tab` buttons (see support.php + support.js) |
| Forms | `<form class="fm" novalidate data-kind="Contact">` > `.in` (2-col grid) > `div` (use `.full` for full width) with `label` (+ `<i>*</i>` for required) and input; every required field needs `<p class="er"></p>` in the same div; submit row `.full.act` with `button.btn.p` and `p.msg[role=status]`. Behaviour is in main.js: validates, then opens the visitor's email app (`mailto:`) with the data. |

## 6. Common tasks (checklists)

**Change phone / email / address / registration numbers / menu / footer** → edit `config.php` only.

**Add a page**
1. Copy `contact.php` (or `support.php`) → `newpage.php`; edit `$page` and content.
2. Add to `NAV` in `config.php`: `'newpage' => ['Label', 'newpage'],` (and to `FOOTER_LINKS` if it should be in the footer).
3. Page-only CSS/JS → new files in `assets/css/pages/` / `assets/js/pages/`, listed in `$page`.
4. Add an entry to the Update log.

**Edit page text** → edit that page's `.php`. Keep markup and classes.

**Change the Home impact numbers** → each `.t` tile in `index.php`: update `data-target`, `data-suffix`, the visible number and the `.sr` text together.

**Replace an image** → put the file in `assets/img/<folder>/`, reference with `asset()`, keep `alt`. (Logo and most hero/news photos are still remote at `assets.zyrosite.com`; moving them local is an open to-do.)

**Change colours/fonts** → `:root` / `@font-face` at the top of `global.css`.

**Contact page map** → `MAP_QUERY` in `config.php` (Google embed by search text, no API key). Contact image → `CONTACT_IMAGE` in `config.php` (replace with a local `asset()` file when the client supplies the hospital photo).

## 7. How to deliver changes (important)
- **Send only the files you created or changed**, each with its full relative path (e.g. `assets/css/pages/contact.css`). **Never zip or resend the whole project.**
- For every file say whether it is **new** or **replaces** an existing one.
- Edit the existing files rather than rewriting from scratch; do not reformat untouched code.
- Keep replies short: what changed, which files, anything the user must check or provide.
- Do not invent client facts (numbers, names, addresses, phone numbers). Use only what the user or the client material states; flag assumptions.

## 8. Checking your work
- No PHP binary may be available in the sandbox. If `php` exists run `php -l` on every changed `.php`; otherwise re-read each changed PHP file for syntax (matching `<?= ?>`, quotes, semicolons).
- JS: `node --check` each changed `.js` file.
- Confirm every `url()` slug exists in `NAV`, every `asset()` file exists, every `subnav` key has a matching section `id`, and every page's `'css'`/`'js'` names have files.
- Ask the user to test in a browser at desktop and ≤860px width, and to click through all pages.

## 9. Known placeholders / open items
- Header and footer are shared by design; if the client wants a different header/footer on some page, discuss before changing `includes/`.
- Logo and most photos load from `assets.zyrosite.com` (should be downloaded to `assets/img/`).
- Home page news cards (`.nw`) link to `#` (real article URLs needed).
- Forms use `mailto:` (no server handler). A PHP mail script is the next step if wanted.
- Font files (6 × `.woff2`) must be added to `assets/fonts/` (see `assets/fonts/README.txt`).
- Home "Our Impact" wording is to be confirmed with the client ("People treated" vs "People reached"; the 60,000+ tile is not on the client infographic).
- Contact page uses a stand-in photo; the client's own hospital satellite image can replace it.

## 10. Client facts (safe to reuse)
Name: Uttarayana Foundation · Registered under the Societies Registration Act, 1860 · 80G & 12A approved · R.NO UK06408072019001690 · DARPAN ID UK/2025/0857139 · 80G AAATU5730HF20215 · 12A AAATU5730HE20142 · Hospital: Village Bhalura, Post NTD, Papershailly, Almora 263601 · Registered office: Village Maat, Kasardevi, Post Dinapani, Almora 263601 · Programmes: Uttarayana Hospital, Health on Wheels, Happy Heart (free heart surgery with the National Heart Institute, Delhi), Nai-Umang (girls' education). Everything else is in `config.php` and the page files.

## 11. Update log (append a line for every change; newest last)
- Initial conversion of the 4 static pages (index, about, programs, support) to PHP with shared includes, split CSS/JS, extracted base64 images to `assets/img/`, self-hosted font setup.
- Home "Our Impact": added tiles "300 families financially assisted" and "> 10,000 ft above sea level (Adi Kailash–Gunji)", 1999/2013 milestone badges; grid now 10 tiles (`.grid8.ten`) in `index.php` + `pages/index.css`.
- Handoff guide for humans written as a Claude Doc ("Uttarayana Foundation Website: Handoff Guide").
- Added Contact page: `contact.php`, `pages/contact.css`, `config.php` (NAV entry, `CONTACT_PHONE`, `MAP_QUERY`, `CONTACT_IMAGE`). Moved form styles (`.fm`, `.er`) to `global.css` and the `form.fm` handler to `main.js` so Support and Contact share them (removed from `pages/support.css` and `pages/support.js`). Added this `AGENTS.md`.
