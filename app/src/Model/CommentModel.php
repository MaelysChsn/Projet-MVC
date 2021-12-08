<?php

namespace App\Model;

use App\Entity\Comments;

class CommentsModel extends DBManager
{

    public function getAllComments(){
        $query = $this->db->prepare('SELECT * FROM comments ORDER BY id DESC');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Comments');
        return $query->fetchAll();
    }

    public function getCommentByID(int $id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Users');
        return $query->fetch();
    }

    public function getCommentByUserID(int $id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE user_id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Users');
        return $query->fetch();
    }

    public function getCommentByPostID(int $id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE post_id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Users');
        return $query->fetch();
    }

}



?>