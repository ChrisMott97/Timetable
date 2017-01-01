<?php

class Buildings
{
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM buildings WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Building');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('SELECT * FROM buildings');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Building');
        return $stmt->fetchAll();
    }
}

