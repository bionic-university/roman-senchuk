<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace BionicUniversity\RomanSenchuk\Cook;


trait TraitFry
{
    public function fry()
    {
        echo $this->getName() . " got fried".PHP_EOL;;
    }
} 