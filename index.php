<?php

/*
 * What loader to use?
 */

// Composer?

$loader = require 'vendor/autoload.php';
$loader->add( 'House', __DIR__.'/src/' );
/* Symfony classLoader?
use Symfony\Component\ClassLoader\ClassLoader as ClassLoader;
$loader = new ClassLoader();
$loader ->getUseIncludePath(true);
$loader ->register();

// OR Both?
*/

var_dump(new \House\House());






/*$stringy = Stringy\Stringy::create('Fòô creaky opt main Fuhrer', 'UTF-8');

echo count($stringy);*/
echo PHP_EOL;

