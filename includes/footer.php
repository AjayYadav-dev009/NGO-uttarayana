<?php

/** Footer + scripts. Include this at the bottom of every page. */
$scripts = array_merge(['js/main.js'], array_map(fn($n) => "js/pages/$n.js", $page['js'] ?? []));
?>
</main>

<footer>
    <div class="w">
        <div class="f">
            <div><img
                    src="<?= asset(SITE_LOGO) ?>"
                    alt="<?= e(SITE_NAME) ?>"><?= implode('<br>', array_map('e', FOOTER_REGISTRATION)) ?></div>
            <div><b>Sitemap</b><?php
                                $links = [];
                                foreach (FOOTER_LINKS as $label => $slug) {
                                    $links[] = '<a href="' . e(url($slug)) . '">' . e($label) . '</a>';
                                }
                                echo implode('<br>', $links);
                                ?></div>
            <div><b>Registered office</b><?= e(FOOTER_OFFICE) ?><br><br><b>Mobile Health Services</b><?= e(TOPBAR_PHONE) ?></div>
            <div><b>Uttarayana Hospital</b><?= e(FOOTER_HOSPITAL) ?>
            </div>
        </div>
        <p style="margin:36px 0 0;font-size:13px">© <?= date('Y') ?> <?= e(SITE_NAME) ?></p>
    </div>
</footer>

<a class="wa" href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>?text=<?= rawurlencode(WHATSAPP_TEXT[current_lang()] ?? WHATSAPP_TEXT['en']) ?>"
    target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
    <svg viewBox="0 0 24 24" width="30" height="30" aria-hidden="true" focusable="false">
        <path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
</a>

<?php
$jsDict = [];   // Hindi text for strings that JavaScript creates (read in the scripts through T('English'))
if (current_lang() !== 'en' && is_file(ROOT . '/lang/' . current_lang() . '_js.php')) {
    $jsDict = require ROOT . '/lang/' . current_lang() . '_js.php';
}
?>
<script>
    window.SITE = {
        assets: "<?= e(BASE_URL) ?>/assets/",
        lang: "<?= e(current_lang()) ?>",
        t: <?= json_encode((object) $jsDict, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>
    };
</script>
<?php foreach ($scripts as $file): ?>
    <script src="<?= asset($file) ?>" defer></script>
<?php endforeach; ?>
</body>

</html>
<?php
if (current_lang() !== 'en' && ob_get_level() > 0) {
    ob_end_flush();   // sends the translated page
}
