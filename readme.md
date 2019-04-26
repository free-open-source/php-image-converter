# PHP Image Converter

*Version 1.0*

PHP library to convert **bmp**, **gif**, **jpeg**, **png** and **webp** image files.

## Usage

```php
<?php
include __DIR__ . '/src/php-image-converter.php';

$from    = __DIR__ . '/image.png';
$to      = __DIR__ . '/image.webp';
$quality = 5;

convertImage($from, $to, $quality);
```

## Notes

If you try to convert to a path that has not been created, it will try to create it automatically.

## Requirements

- PHP 7+
- GD (active on almost every server by default)

## Inspiration

- https://github.com/rakibtg/PHP-ImageToWebp

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT