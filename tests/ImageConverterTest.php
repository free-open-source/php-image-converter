<?php

namespace ImageConverter\Tests;

use ImageConverter\ImageConverter;
use PHPUnit\Framework\TestCase;

class ImageConverterTest extends TestCase
{
    public function pngToAvailablImagesProvider()
    {
        return [
            [__DIR__ . '/fixtures/to/dices.gif'],
            [__DIR__ . '/fixtures/to/dices.jpg'],
        ];
    }

    public function jpgToAvailablImagesProvider()
    {
        return [
            [__DIR__ . '/fixtures/to/dices.gif'],
            [__DIR__ . '/fixtures/to/dices.png'],
        ];
    }

    /**
     * @dataProvider pngToAvailablImagesProvider
     */
    public function testPngToAvailablImages($to)
    {
        $from = __DIR__ . '/fixtures/from/dices.png';
        $converter = new ImageConverter();

        $this->assertTrue($converter->convert($from, $to, 5));
    }

    /**
     * @dataProvider jpgToAvailablImagesProvider
     */
    public function testJpgToAvailablImages($to)
    {
        $from = __DIR__ . '/fixtures/from/road.jpg';
        $converter = new ImageConverter();

        $this->assertTrue($converter->convert($from, $to, 5));
    }
}
