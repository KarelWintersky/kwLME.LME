<?php
/**
 * User: Arris
 * Date: 31.01.2018, time: 23:24
 */

require_once 'vendor/autoload.php';

/*$loader = new \Aura\Autoload\Loader;
$loader->register();
$loader->addPrefix('Livemap\Classes', '/engine/classes');
$loader->addPrefix('Livemap\Units', '/engine/units');*/

use Pecee\SimpleRouter\SimpleRouter;

require_once 'engine/core.helpers.php';
require_once 'engine/core.routes.php';

SimpleRouter::setDefaultNamespace('\Demo\Controllers');

SimpleRouter::start();



 
