<?php

class Nodes
{
    public static function find($nodeid){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM nodes 
            WHERE nodeid = :nodeid
        ');
        $stmt->bindParam(':nodeid', $nodeid);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Node');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM nodes
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Node');
        return $stmt->fetchAll();
    }
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM nodes 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Node');
        return $stmt->fetchAll();
    }
}

