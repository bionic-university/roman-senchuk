<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace BionicUniversity\RomanSenchuk\Cook;


class Cook
{
    private $food;

    function __construct()
    {
        $this->getFood();
        $this->doYummy();
    }

    private function getFood()
    {
        $this->food[] = new Apple();
        $this->food[] = new Eggs();
        $this->food[] = new Meat();
        $this->food[] = new Cabbage();

    }

    public function doYummy()
    {
        foreach ($this->food as $value) {
            if (method_exists($value, "cut")) {
                $value->cut();
            }
            if (method_exists($value, "fry")) {
                $value->fry();
            }
        }

    }

} 