<?php
class PHPImageConverter {
  private $whitelist = [
    'bmp', 'gif', 'jpeg', 'png', 'webp'
  ];

  public function convert($from, $to, $quality = -1) {
    $image = $this->loadImage($from);
    if(!$image) return;
    return $this->saveImage($to, $image, $quality);
  }

  private function loadImage($from) {
    $extension = $this->extension($from);

    if(!in_array($extension, $this->whitelist)) return;

    $method = 'imagecreatefrom' . $extension;
    return $method($from);
  }

  private function saveImage($to, $image, $quality) {
    $extension = $this->extension($to);

    if(!in_array($extension, $this->whitelist)) return;
    if(!file_exists(dirname($to))) $this->makedirs();

    $method = 'image' . $extension;
    return $method($image, $to, $quality);
  }

  private function extension($path) {
    $extension = pathinfo($path)['extension'];
    $extension = ($extension == 'jpg') ? 'jpeg' : $extension;
    return $extension;
  }

  private function makedirs() {
    return mkdir(dirname($this->to), 0755);
  }
}

function convertImage($from, $to, $quality = -1) {
  $converter = new PHPImageConverter();
  return $converter->convert($from, $to, $quality);
}