<?php

namespace Model;

use Entity\Posts;

class Post_model extends DBManager
{

    public function getAllPosts(int $number = null): array
    {
        if($number){
            $query= $this->db->prepare('SELECT * FROM posts ORDER BY id DESC LIMIT :limit');
            $query->bindValue(':limit', $number, \PDO::PARAM_INT);
            $query->execute();
        }else{
            $query = $this->db->query('SELECT * FROM posts ORDER BY id DESC');
        }
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Posts');
        return $query->fetchAll();
    }

    public function getPostByID(int $id){
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Posts');
        return $query->fetch();
    }

}



?>
