<?php


namespace House;

/**
 * Description of House
 *
 * @author rsenchuk
 */
class House {
    
    
    private $walls;
    
    function __construct() {
                    
        $this->addWalls();
    }
    
    function addWalls(){
        $this->walls["leftWall"] = new Wall(400, 300);
        $this->walls["rightWall"] = new Wall(400, 600, new Window(200));
        $this->walls["backWall"] = new Wall(400, 300, new Window());
        $this->walls["frontWall"] = new Wall(400, 600);
    }
}
