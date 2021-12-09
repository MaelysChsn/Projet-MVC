<?php

require './vendor/autoload.php';
require './src/Session/session_helper.php';


$router = new App\Route\Router();
$router->getController();


?>
