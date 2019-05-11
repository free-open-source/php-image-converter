<?php

namespace ImageConverter;

/**
 * Helper function
 *
 * @param string $from
 * @param string $to
 *
 * @return resource
 * @throws \InvalidArgumentException
 */
function convert($from, $to, $quality = null)
{
    $converter = new ImageConverter();
    return $converter->convert($from, $to, $quality);
}
