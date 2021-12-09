<?php

namespace App\Model;

use App\Entity\Users;

class UserModel extends DBManager
{

    public function getAllUsers(){
        $query = $this->db->prepare('SELECT * FROM users ORDER BY id ASC');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Users');
        return $query->fetchAll();
    }

    public function getUserByID(int $id){
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id ORDER BY id DESC');
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'APP\Entity\Users');
        return $query->fetch();
    }

    public function getUserByEmail(string $email){
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindValue(':email', $email, \PDO::PARAM_STR);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'APP\Entity\Users');
        return $query->fetch();
    }

    public function login(string $email, string $password){
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $query->bindValue(':email', $email, \PDO::PARAM_STR);
        $query->bindValue(':password', $email, \PDO::PARAM_STR);
        $query->execute();

        if($query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function register($data){
        $query = $this->db->prepare('INSERT INTO users(`firstname`, `lastname`, `email`, `password`, `is_admin`) VALUES (:firstname, :lastname, :email, :password, 0)');
        $query->bindValue(':firstname', $data['firstname'], \PDO::PARAM_STR);
        $query->bindValue(':lastname', $data['lastname'], \PDO::PARAM_STR);
        $query->bindValue(':email', $data['email'], \PDO::PARAM_STR);
        $query->bindValue(':password', $data['password'], \PDO::PARAM_STR);
        //$query->bindValue(':is_admin', $data['is_admin']);

        if($query->execute()){
            return true;
        }else{
            return false;
        };
    }

}



?>
