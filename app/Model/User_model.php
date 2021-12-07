<?php

namespace Model;

use Entity\Users;

class User_model extends PDOFactory
{

    public function getAllUsers(){
        $query = $this->db->prepare('SELECT * FROM users ORDER BY id DESC');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Users');
        return $query->fetchAll();
    }

    public function getUserByID(int $id){
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Users');
        return $query->fetch();
    }

}



?>
