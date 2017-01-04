<?php

class Destinations
{
    public static function find($id){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM destinations 
            WHERE id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Destination');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM destinations
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Destination');
        return $stmt->fetchAll();
    }
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM destinations 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Destination');
        return $stmt->fetchAll();
    }
}

