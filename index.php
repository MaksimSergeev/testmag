<?php

//FRONT CONTROLLER

//general settings
ini_set('display_errors', 1);
error_reporting(E_ALL);
//connect file
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

//call Router
$router = new Router();
$router->run();