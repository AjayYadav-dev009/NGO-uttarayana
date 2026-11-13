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
