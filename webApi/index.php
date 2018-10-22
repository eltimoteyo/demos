<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoLoader();

$app = new \Slim\Slim();

define('SPECIALCONSTANT',true);

//require 'conexion\conexion.php';
require 'servicios\serviciousuario.php';
require 'servicios\servicioemployees.php';

$app->run();