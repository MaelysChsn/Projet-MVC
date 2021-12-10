<?php

namespace App\Model;

use App\Entity\Comments;

class CommentModel extends DBManager
{

    public function getAllComments(int $post_id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE post_id = :post_id ORDER BY id DESC');
        $query->bindValue(':post_id', $post_id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Comments');
        return $query->fetchAll();
    }

    public function getCommentByID(int $id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Comments');
        return $query->fetch();
    }

    public function getCommentByUserID(int $id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE user_id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Comments');
        return $query->fetch();
    }

    public function getCommentByPostID(int $id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE post_id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Comments');
        return $query->fetch();
    }

    public function addComment($data){
        $query = $this->db->prepare('INSERT INTO `comments`(`user_id`, `post_id`, `content`) VALUES (:user_id, :post_id, :content)');
        $query->bindValue(':user_id', $data['user_id'], \PDO::PARAM_INT);
        $query->bindValue(':post_id', $data['post_id'],  \PDO::PARAM_STR);
        $query->bindValue(':content', $data['content'],  \PDO::PARAM_STR);

        if($query->execute()){
            return true;
        }else{
            return false;
        };
    }

    public function deleteComment(int $id){
        $query = $this->db->prepare('DELETE FROM comments WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        if($query->execute()){
            return true;
        }else{
            return false;
        };
    }

    public function updateComment($data){
        $query = $this->db->prepare('UPDATE comments SET title = :title, content = :content WHERE id = :id');
        $query->bindValue(':title', $data['title'],  \PDO::PARAM_STR);
        $query->bindValue(':content', $data['content'], \PDO::PARAM_STR);
        $query->bindValue(':id', $data['id'], \PDO::PARAM_INT);

        if($query->execute()){
            return true;
        }else{
            return false;
        };
    }

}



?>
