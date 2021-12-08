<?php
namespace App\Model;

use App\PDO\PDOFactory;

abstract class DBManager{

    protected $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnexion();
    }
}

?>
