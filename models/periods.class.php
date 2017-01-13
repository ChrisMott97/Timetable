<?php

class Periods
{
    public static function find($code){
        $stmt = Query::$db->prepare('SELECT * FROM periods WHERE code = :code');
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Period');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM periods
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Period');
        return $stmt->fetchAll();
    }
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM periods 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Period');
        return $stmt->fetchAll();
    }
}

