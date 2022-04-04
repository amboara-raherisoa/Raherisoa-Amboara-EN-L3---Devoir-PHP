<?php

namespace Library;

class PDOFactory
{
    protected static $db; // Contiendra l'instance de notre classe.
    protected function __construct() { } // Constructeur en privé.
    protected function __clone() { } // Méthode de clonage en privé aussi.

    public static function getMysqlConnexion()
    {
        if (!isset(self::$db)) {
            // Si on n'a pas encore instancié notre classe, on s'instancie nous-mêmes.
            self::$db = new \PDO('mysql:host=localhost;dbname=m2ramboara', 'amboara', '');
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return self::$db;  
    }
}
