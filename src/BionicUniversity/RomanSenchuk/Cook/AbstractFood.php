<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace BionicUniversity\RomanSenchuk\Cook;


class AbstractFood
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    function __construct(){
        echo $this->getName()." was created".PHP_EOL;
    }


} 