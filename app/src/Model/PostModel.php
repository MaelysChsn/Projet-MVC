<?php

namespace App\Model;

use App\Entity\Posts;

class PostModel extends DBManager
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
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Posts');
        return $query->fetchAll();
    }

    public function getPostByID(int $id){
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Posts');
        return $query->fetch();
    }

    public function addPost($data){
        $query = $this->db->prepare('INSERT INTO posts(`user_id`, `title`, `content`) VALUES (:user_id, :title, :content)');
        $query->bindValue(':user_id', $data['user_id'], \PDO::PARAM_INT);
        $query->bindValue(':title', $data['title'],  \PDO::PARAM_STR);
        $query->bindValue(':content', $data['content'],  \PDO::PARAM_STR);

        if($query->execute()){
            return true;
        }else{
            return false;
        };
    }

    public function deletePost(int $id){
        $query = $this->db->prepare('DELETE FROM posts WHERE id = :id');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        if($query->execute()){
            return true;
        }else{
            return false;
        };
    }

    public function updatePost($data){
        $query = $this->db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
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
