# PHP Image Converter

*Version 1.0*

PHP library to convert between **bmp**, **gif**, **jpeg**, **png** and **webp** image files.

## Usage

```php
<?php
include __DIR__ . '/src/php-image-converter.php';

// convertImage ( string $from , string $to , int $quality )
convertImage('./image.png', './image.webp', 5);
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