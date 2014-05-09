<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace Cook {


    class Cabbage extends AbstractFood implements ICut, IFry{

        function __construct(){
            $this->setName('Cabbage');
            parent::__construct();
        }

        use TraitCut;

        use TraitFry;
    }
}