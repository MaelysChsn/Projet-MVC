<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\CommentModel;


class PostController extends BaseController
{
    public function executeIndex(int $number = null){
        $model = new PostModel();
        $index = $model->getAllPosts($number);
        return $this->render('Homepage', $index, 'Frontend/index');
    }

    public function executeShow(){
        $modelPost = new PostModel();
        $modelComment = new CommentModel();

        $article = $modelPost->getPostByID($this->params['id']);
        $comments = $modelComment->getCommentByPostID($this->params['id']);

        if(!$article){
            header('Location: /');
            exit();
        }

        return $this->render($article->getTitle(), ['article' => $article], 'Frontend/article');
    }

    public function executeAddPost(){

        $modelPost = new PostModel();

        $data = [
    		'title' => '',
    		'content' => '',
            'user_id' => '',
            'titleError' => '',
    		'contentError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
        		'title' => trim($_POST['title']),
        		'content' => trim($_POST['content']),
                'user_id' => 1,
                'titleError' => '',
        		'contentError' => '',
            ];

            if(empty($data['title'])){
                $data['titleError'] = 'Your title cannot be empty !';
            }
            else if(empty($data['content'])){
                $data['contentError'] = 'Your post cannot be empty !';
            }

            if(empty($data['contentError']) && empty($data['titleError'])){
                if($modelPost->addPost($data)){
                    header('Location: /');
                }else{
                    die('Oups ... Something went wrong please try again !');
                };
            }else{
                return $this->render('wrong post', $data, 'Frontend/addpost');
                var_dump($data);
            }
        }

        return $this->render('write post', $data, 'Frontend/addpost');


    }

    public function executeUpdatePost(){
        $modelPost = new PostModel();


        return $this->render("Update Post", [] , 'Frontend/update');
    }

}



?>
