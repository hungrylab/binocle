<?php

// register Composer auto loader
require __DIR__ . '/vendor/autoload.php';

$theme = new Binocle\Core\Theme;
$theme->boot();