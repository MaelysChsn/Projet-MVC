<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\CommentModel;
use App\Model\UserModel;


class PostController extends BaseController
{
        //SHOW POST
    public function executeIndex(int $number = null){
        $model = new PostModel();
        $index = $model->getAllPosts($number);
        return $this->render('Homepage', $index, 'Frontend/index');
    }

    public function executeShow(){
        $modelPost = new PostModel();
        $modelComment = new CommentModel();
        $modelUser = new UserModel();


        $article = $modelPost->getPostByID($this->params['id']);
        $comments = $modelComment->getAllComments($this->params['id']);
        $users = $modelUser->getAllUsers();

        if(!$article){
            header('Location: /');
            exit();
        }

        return $this->render($article->getTitle(), ['article' => $article, 'comments' => $comments, 'modelUser' => $modelUser], 'Frontend/article');
    }


    //ADD POST
    public function executeAddPost(){

        $modelPost = new PostModel();

        $data = [
    		'title' => '',
    		'content' => '',
            'image' => '',
            'user_id' => '',
            'titleError' => '',
    		'contentError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $image = $_FILES['image']['name'];
            $target = "/var/www/html/src/Image/".basename($image);

            $data = [
        		'title' => trim($_POST['title']),
        		'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
                'image' => $image,
                'titleError' => '',
        		'contentError' => '',
                'fileError' => '',
            ];

            if(empty($data['title'])){
                $data['titleError'] = 'Your title cannot be empty !';
            }
            elseif(empty($data['content'])){
                $data['contentError'] = 'Your post cannot be empty !';
            }
            // var_dump(__DIR__.'/../../uploads/'. $_FILES["image"]['name']);

            if(empty($data['contentError']) && empty($data['titleError'])){
                if($modelPost->addPost($data)){
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
                        header('Location: /');
                    }
                }else{
                    die('Oups ... Something went wrong please try again !');
                };
            }else{
                return $this->render('wrong post', $data, 'Frontend/addpost');
            }
        }

        return $this->render('write post', $data, 'Frontend/addpost');


    }

    //UPDATE POST
    public function executeUpdatePost(){
        $modelPost = new PostModel();
        $post = $modelPost->getPostByID($this->params['id']);

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
                'id' => $this->params['id'],
        		'title' => trim($_POST['title']),
        		'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
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
                if($modelPost->updatePost($data)){
                    header('Location: /article/'.$this->params['id'].'');
                }else{
                    die('Oups ... Something went wrong please try again !');
                };
            }else{
                return $this->render('Wrong update', $data, 'Frontend/update');
            }
        }


        return $this->render("Update Post", ['post' => $post], 'Frontend/update');
    }

    //DELETE POST
    public function executeDeletePost(){
        $modelPost = new PostModel();
        $post = $modelPost->getPostByID($this->params['id']);

        $data = [
            'post' => $post,
    		'title' => '',
    		'content' => '',
            'user_id' => '',
            'titleError' => '',
    		'contentError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($modelPost->deletePost($this->params['id'])){
                header('Location: /');
            }else{
                die("Cannot delete this post !");
            }
        }
    }

}



?>
