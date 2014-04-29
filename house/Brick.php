<?php


namespace house;

/**
 * Description of Brick
 *
 * @author rsenchuk
 */


class Brick {
    private $height;
    private $width;
    
    function __construct($width=20, $height=10) {
        $this->height=$height;
        $this->width = $width;
    }
    public function getHeight() {
        return $this->height;
    }

    public function getWidth() {
        return $this->width;
    }


}
