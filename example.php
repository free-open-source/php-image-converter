<?php

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    require_once __DIR__ . '/src/ImageConverter.php';
}

use Jens\ImageConverter\ImageConverter;

$from = __DIR__ . '/tests/fixtures/from/dices.png';
$to = __DIR__ . '/tests/fixtures/to/dices.webp';

$converter = new ImageConverter();

echo $converter->convert($from, $to, 5);
