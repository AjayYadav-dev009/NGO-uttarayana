<?php

/**
 * Top bar + main navigation (+ page banner and "on this page" menu on inner pages).
 * Include this at the top of every page, after setting $page.
 */
require __DIR__ . '/head.php';
$current = $page['slug'] ?? '';
?>
<div class="top">
    <div class="w"><span>Mobile Health Services: <?= e(TOPBAR_PHONE) ?></span><span><?= e(TOPBAR_EMAIL) ?> &nbsp;|&nbsp; EN
            / हिन्दी</span></div>
</div>
<header class="nav">
    <div class="w"><a href="<?= url('home') ?>"><img
                src="<?= e(SITE_LOGO) ?>"
                alt="<?= e(SITE_NAME) ?>"></a>
        <ul id="menu">
            <?php foreach (NAV as $slug => $item): ?>
                <li><a href="<?= url($slug) ?>" <?= $slug === $current ? ' aria-current="page"' : '' ?>><?= e($item[0]) ?></a></li>
            <?php endforeach; ?>
        </ul><a class="btn" href="<?= url(...DONATE_LINK) ?>">Donate</a>
        <button class="mb" aria-label="Menu" aria-expanded="false"
            aria-controls="menu"><span></span><span></span><span></span></button>
    </div>
</header>

<?php if (!empty($page['hero'])): ?>
    <header class="ph">
        <div class="w">
            <div class="crumb"><a href="<?= url('home') ?>">Home</a> &nbsp;/&nbsp; <?= e($page['hero']['crumb']) ?></div>
            <h1><?= e($page['hero']['title']) ?></h1>
            <p><?= e($page['hero']['lead']) ?></p>
        </div>
    </header>

<?php endif; ?>
<?php if (!empty($page['subnav'])): ?>
    <nav class="sn" aria-label="On this page">
        <div class="w">
            <?php foreach ($page['subnav'] as $anchor => $label): ?>
                <a href="#<?= e($anchor) ?>"><?= e($label) ?></a>
            <?php endforeach; ?>
        </div>
    </nav>

<?php endif; ?>
<main>