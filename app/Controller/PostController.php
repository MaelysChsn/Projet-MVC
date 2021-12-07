<?php

namespace Controller;

use Model\Post_model;


class PostController extends BaseController
{
    public function executeIndex(int $number = 2){
        $model = new Post_model();
        $index = $model->getAllPosts($number);
        return $this->render('Homepage', $index, 'Frontend\index');
    }
}



?>
