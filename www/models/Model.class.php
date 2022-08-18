<?php
abstract class model{
    private static $pdo;

    protected function _getDatabase($host, $dbname, $login, $password){
        if (self::$_pdo === null) {
           try {
            self::$_pdo = self::_connect($host, $dbname, $login, $password);
           } catch (Exception $error) {
                echo "Erreur de connexion à la BDD.<br>";
                die("ERROR:".$error->getMessage());
           }
        }
    }

    private static function _connect($host, $dbname, $login, $password){
        $db = new PDO("mysql:host=".$host.";dbname=".$dbname, $login, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $db;

    }
}
?>