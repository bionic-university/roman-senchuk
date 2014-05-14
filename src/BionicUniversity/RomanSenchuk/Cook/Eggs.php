<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace BionicUniversity\RomanSenchuk\Cook;


class Eggs extends AbstractFood implements IFry
{

    function __construct()
    {
        $this->setName('Eggs');
        parent::__construct();
    }

    use TraitFry;

}