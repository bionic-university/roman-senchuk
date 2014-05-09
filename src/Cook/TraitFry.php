<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace Cook;


trait TraitFry {
    public function fry(){
        echo $this->getName() . " got fried";
    }
} 