<?php

/*
 * What to use?
 */

// Composer?
require './vendor/autoload.php';

// Symfony
use Symfony\Component\ClassLoader\ClassLoader as ClassLoader;
$loader = new ClassLoader();
$loader ->getUseIncludePath(true);
$loader ->register();

// OR Both?









$stringy = Stringy\Stringy::create('Fòô creaky opt main Fuhrer', 'UTF-8');

echo count($stringy);
echo PHP_EOL;

