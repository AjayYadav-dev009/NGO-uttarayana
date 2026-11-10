<?php

/**
 * Site-wide settings. Edit contact details, registration numbers and the
 * navigation here once and every page (header + footer) updates.
 */

const SITE_NAME   = 'Uttarayana Foundation';
const SITE_LOGO   = 'https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/uttarayana-logo-v616Vkv8vh5mG4ek.png';
const SITE_LANG   = 'en';
const ASSET_VER   = true;   // append ?v=<file-modified-time> to CSS/JS/image URLs (cache busting)

/* Top bar */
const TOPBAR_PHONE = '9410159952';
const TOPBAR_EMAIL = 'uttarayana.faith@gmail.com';

/* Main navigation: slug => [label, file, optional #anchor].  The slug is what each page
   sets in $page['slug'] so the right link gets aria-current="page". */
const NAV = [
    'home'     => ['Home',               'index'],
    'about'    => ['About us',           'about'],
    'programs' => ['Programs & Impact',  'programs'],
    'support'  => ['Support Us',         'support'],
    'contact'  => ['Contact',            'contact'],
];

/* Header "Donate" button */
const DONATE_LINK = ['support', 'donate'];

/* Footer sitemap: label => slug */
const FOOTER_LINKS = [
    'Home'                 => 'home',
    'Our Story'            => 'about',
    'Programs and Impact'  => 'programs',
    'Get Involved'         => 'support',
    'Contact'              => 'contact',
];

/* Registration details shown in the footer (one line each) */
const FOOTER_REGISTRATION = [
    'R.NO: UK06408072019001690',
    'DARPAN ID: UK/2025/0857139',
    '80G: AAATU5730HF20215',
    '12A: AAATU5730HE20142',
];

const FOOTER_OFFICE   = 'Village Maat, Kasardevi, Post: Dinapani, Almora, Uttarakhand 263601';
const FOOTER_HOSPITAL = 'Village Bhalura, Post: NTD, Papershailly, Almora, Uttarakhand 263601';

/* Contact page */
const CONTACT_PHONE = '98106 01252';
const MAP_QUERY     = 'Uttarayana Hospital, Papershailly, Almora, Uttarakhand';   // what the Google map shows
const CONTACT_IMAGE = 'https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/uttarayana-faith-foundation-tNiry7UUvq3qfvPc.png';
