<?php
namespace Model;

use PDO\PDOFactory;

abstract class DBManager{

    protected $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnexion();
    }
}

?>
