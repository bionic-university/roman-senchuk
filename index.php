<?php


// Composer load

$loader = require 'vendor/autoload.php';
$loader->add( 'BionicUniversity', __DIR__.'/src/' );

new \BionicUniversity\RomanSenchuk\Cook\Cook();



echo PHP_EOL;

