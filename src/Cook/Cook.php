<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace Cook;


class Cook {


    function __construct(){
        $this->getFood();
    }

    private function getFood(){
        $apple = new Apple();
        $apple->cut();
    }

} 