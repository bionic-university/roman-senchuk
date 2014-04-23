<?php


require './vendor/autoload.php';


use Stringy\Stringy as S;

$stringy = S::create('Fòô creazy opt mein Fuhrer', 'UTF-8');
echo count($stringy);  // 3
echo PHP_EOL;