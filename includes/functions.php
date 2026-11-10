<?php
/** Small helpers used by the templates. */

/* Folder the site lives in, so it works at the domain root and in a sub-folder (e.g. localhost/ngo/). */
if (!defined('BASE_URL')) {
    $dir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
    define('BASE_URL', $dir);
}

/** HTML-escape. */
function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** URL of a file inside /assets, e.g. asset('css/global.css'). */
function asset(string $path): string
{
    $url = BASE_URL . '/assets/' . ltrim($path, '/');
    $file = dirname(__DIR__) . '/assets/' . ltrim($path, '/');
    if (ASSET_VER && is_file($file)) {
        $url .= '?v=' . filemtime($file);
    }
    return $url;
}

/** URL of a page by slug, with an optional #anchor: url('programs', 'heart'). */
function url(string $slug, ?string $anchor = null): string
{
    $entry = NAV[$slug] ?? null;
    $file  = $entry[1] ?? null;
    if ($slug === 'home') {
        $href = BASE_URL . '/';
    } elseif ($file) {
        $href = BASE_URL . '/' . $file . '.php';
    } else {
        $href = '#';
        $anchor = null;
    }
    return $anchor ? $href . '#' . $anchor : $href;
}

/** Full <title> text. */
function page_title(array $page): string
{
    return SITE_NAME . ' – ' . ($page['title'] ?? '');
}
