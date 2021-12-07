<?php

namespace PDO;


class PDOFactory
{
    public static function getMysqlConnexion () {
        try
        {
            //PDO est dans le namespace racine
            $db = new \PDO('mysql:host=db;dbname=db', 'user', 'password');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br>";
            echo "N° : " . $e->getCode();
            die("Fin du script");
        }
    }

}



?>
