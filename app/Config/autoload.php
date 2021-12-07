<?php

spl_autoload_register(function($className){

    //className = Controller\PostController;
    //require = Controller\PostController.php;
    $className = str_replace("\\", "/", $className);
    require_once("$className.php");
});



?>
