<?php

namespace Controller;

use Model\Post_model;
/**
 *
 */
class PostController extends BaseController
{
    public function showIndex(int $number = 5){
        $model = new Post_model();
        $index = $model->getAllPosts($number);
        return $this->render('Homepage', $index, 'Frontend\index');
    }

}



?>
