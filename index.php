<?php
include __DIR__ . '/src/php-image-converter.php';

$from = __DIR__ . '/tests/from/dices.png';
$to = __DIR__ . '/tests/to/dices.webp';

echo convertImage($from, $to, 5);