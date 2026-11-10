<?php
/** Footer + scripts. Include this at the bottom of every page. */
$scripts = array_merge(['js/main.js'], array_map(fn($n) => "js/pages/$n.js", $page['js'] ?? []));
?>
    </main>

    <footer>
        <div class="w">
            <div class="f">
                <div><img
                        src="<?= e(SITE_LOGO) ?>"
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

    <script>window.SITE = { assets: "<?= e(BASE_URL) ?>/assets/" };</script>
<?php foreach ($scripts as $file): ?>
    <script src="<?= asset($file) ?>" defer></script>
<?php endforeach; ?>
</body>

</html>
