<?php
/** Loaded first by every page. */
define('ROOT', dirname(__DIR__));
define('INC', __DIR__);

require ROOT . '/config.php';
require INC . '/functions.php';
require INC . '/i18n.php';
i18n_boot();   // reads ?lang= / the language cookie