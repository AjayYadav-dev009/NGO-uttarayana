Self-hosted font: Mukta (weights 400, 600, 700; latin + devanagari)

The @font-face rules at the top of assets/css/global.css expect these 6 files in this folder:

  mukta-latin-400-normal.woff2        mukta-devanagari-400-normal.woff2
  mukta-latin-600-normal.woff2        mukta-devanagari-600-normal.woff2
  mukta-latin-700-normal.woff2        mukta-devanagari-700-normal.woff2

Easiest way to get them (exact file names):
  npm install @fontsource/mukta
  copy the six files above from node_modules/@fontsource/mukta/files/ into this folder

Or: https://gwfh.mranftl.com/fonts/mukta  -> pick "latin" + "devanagari", weights 400/600/700,
download the woff2 files and rename them to match the names above.

Why devanagari too: the top bar shows "हिन्दी" and the Rupee sign (₹) lives in the devanagari subset.
Mukta is licensed under the SIL Open Font License, so self-hosting is fine.
