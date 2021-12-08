<?php

namespace App\Controller;

use App\Model\PostModel;


class PostController extends BaseController
{
    public function executeIndex(int $number = 2){
        $model = new PostModel();
        $index = $model->getAllPosts($number);
        return $this->render('Homepage', $index, 'Frontend/index');
    }

    public function executeShow(){
        $model = new PostModel();
        $article = $model->getPostByID($this->params['id']);

        if(!$article){
            header('Location: /');
            exit();
        }

        return $this->render($article->getTitle(), ['article' => $article], 'Frontend/article');
    }
}



?>
