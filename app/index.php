<?php

//require_once('Config/autoload.php');
require './vendor/autoload.php';
//require './Route/Router.php';
//use Route\Router;

$router = new App\Route\Router();
$router->getController();


?>
