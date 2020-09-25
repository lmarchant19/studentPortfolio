<?php
#*********************************************************************************
#
#Database
#Name       Date          Description
#Logan      9/23/2020     Added db constructor
#
#*********************************************************************************
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=lmportfolio';
    private static $username = 'lm_user';
    private static $password = 'Pa$$w0rd';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}


?>