<?php 

namespace Illuminate\database;

use PDO;
use PDOException;

class DBconnection{
    public static $pdo;

    public static $credentials;

    public static function connect()
    {
        if(isset(self::$pdo)){
            return static::$pdo;
        }
        return self::getconnection();
        
    }

    public static function getconnection()
    {
        $credentials=app()->get('credentials');
        extract($credentials);
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
        
    }

}

// var_export(DBconnection::getConnection());