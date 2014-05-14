<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace BionicUniversity\RomanSenchuk\Cook;


class Meat extends AbstractFood implements IFry
{

    function __construct()
    {
        $this->setName('Meat');
        parent::__construct();
    }

    use TraitFry;

}