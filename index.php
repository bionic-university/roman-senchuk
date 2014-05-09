<?php


// Composer load

$loader = require 'vendor/autoload.php';
$loader->add( 'Cook', __DIR__.'/src/' );

new \Cook\Cook();



echo PHP_EOL;

