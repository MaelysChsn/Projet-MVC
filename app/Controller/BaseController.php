<?php

namespace Controller;
/**
 *
 */
abstract class BaseController
{

    protected $template = __DIR__ . './../View/template.php';
    protected $viewDir = __DIR__ . './../View/';


    public function render(string $title, vars $array, string $view){
        $view =  $this->viewDir . $view .'.php';
        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $this->template;
    }

}



?>
