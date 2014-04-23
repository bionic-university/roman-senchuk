<?php


require './vendor/autoload.php';


use Stringy\Stringy as S;

$stringy = S::create('Fòô creazy opt mein Fuhrer', 'UTF-8');
echo count($stringy);  
echo PHP_EOL;
