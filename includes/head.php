<?php
/** <head> of every page. Expects $page (see the top of any page file). */
$css = array_merge(['css/global.css'], array_map(fn($n) => "css/pages/$n.css", $page['css'] ?? []));
?>
<!DOCTYPE html>
<html lang="<?= e(current_lang()) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="color-scheme" content="light">
<?php if (!empty($page['description'])): ?>
    <meta name="description" content="<?= e($page['description']) ?>">
<?php endif; ?>
    <title><?= e(page_title($page)) ?></title>

    <!-- Self-hosted Mukta (see assets/fonts/README.txt) -->
    <link rel="preload" href="<?= asset('fonts/mukta-latin-400-normal.woff2') ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= asset('fonts/mukta-latin-700-normal.woff2') ?>" as="font" type="font/woff2" crossorigin>
<?php foreach ($css as $file): ?>
    <link rel="stylesheet" href="<?= asset($file) ?>">
<?php endforeach; ?>
</head>

<body>