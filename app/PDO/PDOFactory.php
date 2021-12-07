<?php

namespace PDO;


class PDOFactory
{

    const USER = 'user';
    const PASSWORD = 'password';
    const HOST = 'localhost';
    const DBNAME = 'db';

    static public function getMysqlConnexion () {
        try
        {
            $db = new PDO ('mysql:host=' . PDOFactory::HOST . ';dbname=' . PDOFactory::DBNAME , PDOFactory::USER , PDOFactory::PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br>";
            echo "N° : " . $e->getCode();
            die("Fin du script");
        }
    }

}



?>
