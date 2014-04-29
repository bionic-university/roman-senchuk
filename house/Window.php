<?php



namespace house;

/**
 * Window class
 *
 * @author rsenchuk
 */
class Window {
    private $width;
    private $height;
    function __construct($width=150, $height=150) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }


    
}
