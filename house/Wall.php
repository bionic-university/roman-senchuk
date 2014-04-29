<?php

namespace house;


use house\Window;
use house\Brick;
/**
 * Wall cosist of bricks 
 * and can have a window
 *
 * @author rsenchuk
 */
class Wall {
    
    private $width;
    
    private $height;
    
    /**
     * @var Window
     */
    private $window;
    /**
     * @var \ArrayObject
     */
    private $bricks;
            
    function __construct($height, $width, house\Window $window = null) {
        $this->bricks = new \ArrayObject();
        
        $this->height = $height;
        $this->width = $width;
        if($window){$this->window = $window;}
        $this->countBricks();
    }
    
    function countBricks(){
        $windowSquare = 0.0;
        $bricksSquare = 0.0;
        
        if($this->window){
           $windowSquare = $this->window.getHeight() * $this->window.getWidth();
        }
        
        $bricksSquare = $this->height * $this->width - $windowSquare;
        build($bricksSquare);
    }
    function build($bricksSquare = null){
        $widthToBuild = $this->width;
        $heightToBuild = $this->height;
        
        while ($heightToBuild < 0){
            while($widthToBuild < 0){
                $brick = new Brick();
                $this->bricks->append($brick);
                $widthToBuild -= $brick.getWidth();
            }
            $heightToBuild-= $brick.getHeight();
        }
        if($bricksSquare){
            echo 'we have some extra bricks';
            
        }
    }
 
    /**
     * All the bricks
     * 
     * @return \ArrayObject
     */
    public function getBricks() {
        return $this->bricks;
    }


}
