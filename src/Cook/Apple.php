<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace Cook;


class Apple extends AbstractFood implements ICut{

    function __construct(){
        $this->setName('Apple');
    }

    use TraitCut;

}