# PHP Image Converter

*Version 1.0*

A small single file image converter PHP library.

## In short

- Convert **bmp**, **gif**, **jpeg**, **png** and **webp** image files.
- Folders that are missing will automatically be created.

## Usage

### Example

```php
<?php
include __DIR__ . '/src/php-image-converter.php';

convertImage('path/to/image.png', 'path/to/image.webp', 5);
```

If you try to convert to a path that has not been created, it will try to create it automatically.

**Arguments of convertImage**

1. Path to **load** the image.
1. Path to **save** the image.
1. Image quality - optional.

## Formats

You can convert from or to any of the formats listed below.

- bmp
- gif
- jpeg
- png
- webp

## Requirements

- PHP 7+
- GD (active on almost every server by default)

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT