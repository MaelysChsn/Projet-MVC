<?php

require_once('Config/autoload.php');

require './Route/Router.php';
use Route\Router;

$router = new Router();
$router->getController();


?>
