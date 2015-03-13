<?php
// register Composer auto loader
require __DIR__ . '/vendor/autoload.php';

$t = isset($t) ? $t : null;

$theme = new Binocle\Theme\Loader;
$theme->boot($t);
