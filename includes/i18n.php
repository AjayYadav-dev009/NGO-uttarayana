<?php
/**
 * Language switching (English / Hindi).
 *
 * - The visitor's choice is stored in a cookie ("lang"). Links like  ?lang=hi  switch it.
 * - Pages are written in English. When Hindi is selected, the finished HTML is passed through
 *   i18n_filter(), which swaps every text / attribute found in lang/hi.php for its Hindi version.
 * - Text that has no Hindi entry simply stays in English, so nothing ever breaks.
 * To translate more text, add a line to lang/hi.php (key = the English text, value = Hindi).
 */

const LANGS = ['en' => 'EN', 'hi' => 'हिन्दी'];

function current_lang(): string
{
    return $GLOBALS['CURRENT_LANG'] ?? 'en';
}

/** Read ?lang=xx (set cookie and redirect to the clean URL) or the saved cookie. */
function i18n_boot(): void
{
    header('Vary: Cookie');
    $lang = 'en';

    if (isset($_GET['lang']) && is_string($_GET['lang']) && isset(LANGS[$_GET['lang']])) {
        setcookie('lang', $_GET['lang'], ['expires' => time() + 31536000, 'path' => '/', 'samesite' => 'Lax']);
        $path = '/' . ltrim((string) strtok($_SERVER['REQUEST_URI'] ?? '/', '?'), '/\\');   // clean path, never //host
        header('Location: ' . $path, true, 302);
        exit;
    }
    if (isset($_COOKIE['lang']) && is_string($_COOKIE['lang']) && isset(LANGS[$_COOKIE['lang']])) {
        $lang = $_COOKIE['lang'];
    }
    $GLOBALS['CURRENT_LANG'] = $lang;
}

/** Normalise text for lookup: decode entities, collapse whitespace (incl. non-breaking spaces). */
function i18n_norm(string $s): string
{
    $s = html_entity_decode($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return trim((string) preg_replace('/[\s\x{00A0}]+/u', ' ', $s));
}

/** Hindi version of $raw (keeping its leading/trailing spaces), or null when there is none. */
function i18n_lookup(string $raw, array $dict): ?string
{
    $key = i18n_norm($raw);
    if ($key === '' || !isset($dict[$key])) {
        return null;
    }
    preg_match('/^\s*/u', $raw, $a);
    preg_match('/\s*$/u', $raw, $b);
    return ($a[0] ?? '') . htmlspecialchars($dict[$key], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . ($b[0] ?? '');
}

/** Output-buffer callback: translate the whole page. */
function i18n_filter(string $html, int $phase = 0): string
{
    static $dict = null;
    if ($dict === null) {
        $file = ROOT . '/lang/' . current_lang() . '.php';
        $dict = is_file($file) ? (require $file) : [];
    }
    if (!$dict) {
        return $html;
    }

    // never touch <script> and <style> blocks (odd array entries are the captured blocks)
    $parts = preg_split('#(<script\b.*?</script>|<style\b.*?</style>)#is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    if ($parts === false) {
        return $html;
    }

    foreach ($parts as $i => $part) {
        if ($i % 2 === 1) {
            continue;
        }
        // 1) text between tags
        $out = preg_replace_callback('/>([^<>]+)</u', function ($m) use ($dict) {
            $t = i18n_lookup($m[1], $dict);
            return $t === null ? $m[0] : '>' . $t . '<';
        }, $part);
        if ($out !== null) {
            $part = $out;
        }
        // 2) attributes people read or hear
        $out = preg_replace_callback('/\b(alt|title|placeholder|aria-label|data-suffix|content)="([^"]*)"/u', function ($m) use ($dict) {
            $t = i18n_lookup($m[2], $dict);
            return $t === null ? $m[0] : $m[1] . '="' . $t . '"';
        }, $part);
        if ($out !== null) {
            $part = $out;
        }
        $parts[$i] = $part;
    }
    return implode('', $parts);
}
