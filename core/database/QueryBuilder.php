<?php

namespace Illuminate\database;

use PDO;

class QueryBuilder {
    public static $pdo;
    public static function PDO()
    {
        if(empty($pdo)){
            static::$pdo=DBconnection::connect();
        }
        return self::$pdo;
    }

    public static function  all()
    {
        $class= static::class;
        $table= self::getTable($class);
        $q="select * from $table";
        $stmt=self::PDO()->prepare($q);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,static::class);
    }

    public static function getTable($class)
    {
        return  strtolower(trim(preg_split('/Models/',"$class")[1],"\\"))."s";
    }

    public static function create($array)
    {
        $class= static::class;
        $table= self::getTable($class);
        
        $query=sprintf("insert into %s (%s) values (%s)",
        $table,
        implode(",",array_keys($array)),
        ":".implode(",:",array_keys($array)),
        );

        $stmt=self::PDO()->prepare($query);
        $stmt->execute($array);
    }
}