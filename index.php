<?php

/*
 * What loader to use?
 */

// Composer?

$loader = require 'vendor/autoload.php';
$loader->add( 'Cook', __DIR__.'/src/' );


/* Symfony classLoader?
use Symfony\Component\ClassLoader\ClassLoader as ClassLoader;
$loader = new ClassLoader();
$loader ->getUseIncludePath(true);
$loader ->register();


*/

var_dump(new \Cook\Cook());




echo PHP_EOL;

