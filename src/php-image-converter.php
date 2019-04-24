<?php
class PHPImageConverter {
  public function convert($from, $to) {
    $this->from = $from;
    $this->to = $to;

    $this->getImage();
  }


  private function getImage() {
    $img = null;

    switch($this->extension($this->from)) {
      case 'jpg':
      case 'jpeg':
        $img = imagecreatefromjpeg($this->from);
        break;
      case 'gif':
        $img = imagecreatefromgif($this->from);
        break;
      case 'bmp':
        $img = imagecreatefrombmp($this->from);
        break;
      case 'webp':
        $img = imagecreatefromwebp($this->from);
        break;
    }
  }

  private function extension($path) {
    return pathinfo($path)['extension'];
  }
}

$from = __DIR__ . '/test.jpg';
$to = __DIR__ . '/asda.png';

$converter = new PHPImageConverter();
$converter->convert($from, $to);
/*
  class ImageToWebp {

    private $source = null;

    protected function getImageResource () {

      // Find the extension of source image.
      $extension = strtolower( strrchr ( $this->source, '.' ) );

      // Convert image to resource object according to its type.
      switch ( $extension ) {
        case '.jpg':
        case '.jpeg':
          $img = @imagecreatefromjpeg( $this->source );
          break;
        case '.gif':
          $img = @imagecreatefromgif( $this->source );
          break;
        case '.png':
          $img = @imagecreatefrompng( $this->source );
          break;
        default:
          $img = false;
          break;
      }
      return $img;
    }

    public function convert ( $source, $destination, $quality = 80 ) {

      // Set default values globally
      $this->source = $source;

      // Convert to webp, yey
      imagewebp( $this->getImageResource(), $destination, $quality );

    }
  }
  */