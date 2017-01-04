<?php

class Notifications
{
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM notifications WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Notification');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('SELECT * FROM notifications');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Notification');
        return $stmt->fetchAll();
    }
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM notifications 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Notification');
        return $stmt->fetchAll();
    }
    public static function save(Notification $notification){
        $stmt = Query::$db->prepare("INSERT INTO notifications 
            (userid, title, description, request) 
            VALUES(:userid, :title, :description, :request)");
        $stmt->bindParam(':userid', $notification->userid);
        $stmt->bindParam(':title', $notification->title);
        $stmt->bindParam(':description', $notification->description);
        $stmt->bindParam(':request', $notification->request);
        return $stmt->execute();
    }
    public static function remove($id){
        $stmt = Query::$db->prepare("DELETE FROM notifications WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

