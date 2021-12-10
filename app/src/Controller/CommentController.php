<?php

namespace App\Controller;

use App\Model\CommentModel;



class CommentController extends BaseController
{



    //ADD POST
    public function executeAdd(){
        $modelComment = new CommentModel();

        $data = [
    		'user_id' => '',
    		'post_id' => '',
            'content' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
        		'user_id' => $_SESSION['user_id'],
        		'post_id' => $this->params['id'],
                'content' => trim($_POST['content']),
            ];

            if($modelComment->addComment($data)){
                header('Location: /article/'.$this->params['id'].'');
            }else{
                die('Oups ... Something went wrong please try again !');
            };

        }


    }

    //DELETE POST
    public function executeDelete(){
        $modelComment = new CommentModel();
        $comments = $modelComment->getCommentByID($this->params['id']);



        $data = [
            'comment' => $comments,
    		'content' => '',
    		'content' => '',
            'user_id' => '',
            'titleError' => '',
    		'contentError' => '',
        ];


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($modelComment->deleteComment($this->params['id'])){
                header('Location: /article/'.$data['comment']->getPostId().'');
            }else{
                die("Cannot delete this comment !");
            }
        }
    }

}



?>
