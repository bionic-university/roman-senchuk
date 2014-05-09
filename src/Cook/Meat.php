<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace Cook;


class Meat extends AbstractFood implements IFry
{

    function __construct()
    {
        $this->setName('Meat');
        parent::__construct();
    }

    use TraitFry;

}