<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace BionicUniversity\RomanSenchuk\Cook;


class Apple extends AbstractFood implements ICut
{

    function __construct()
    {
        $this->setName('Apple');
        parent::__construct();
    }

    use TraitCut;

}