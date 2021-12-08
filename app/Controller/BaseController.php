<?php

namespace Controller;
/**
 *
 */
abstract class BaseController
{
    protected $params;
    protected $template = __DIR__ . './../View/template.php';
    protected $viewDir = __DIR__ . './../View/';


    public function __construct(string $action, array $params = []){
        $this->params = $params;

        $method = 'execute' . ucfirst($action);
        if(!is_callable([$this, $method])){
            throw new \RuntimeException("L'action $method n'est pas définie sur ce module");
        }
        $this->$method();
    }

    public function render(string $title, array $vars, string $view){
        $view =  $this->viewDir . $view .'.php';
        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $this->template;
    }

}



?>
