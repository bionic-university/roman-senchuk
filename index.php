<?php

/*
 * What loader to use?
 */

// Composer?
require './vendor/autoload.php';
$loader->add('house\\', __DIR__.'/house/');

// Symfony classLoader?
use Symfony\Component\ClassLoader\ClassLoader as ClassLoader;
$loader = new ClassLoader();
$loader ->getUseIncludePath(true);
$loader ->register();

// OR Both?


var_dump(new house\House());






/*$stringy = Stringy\Stringy::create('Fòô creaky opt main Fuhrer', 'UTF-8');

echo count($stringy);*/
echo PHP_EOL;

