<?php
/** Factory for Notifications table. */
class Notifications
{

    /**
     * Queries the Notifications table in the database for a single Notification.
     * 
     * @param  Integer $id 
     * @return Notification     
     */
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM notifications WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Notification');
        return $stmt->fetch();
    }

    /**
     * Queries the Notifications table in the database for all Notifications.
     * 
     * @return Array which contains Notification objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('SELECT * FROM notifications');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Notification');
        return $stmt->fetchAll();
    }

    /**
     * Queries the Notifications table in the database for all Notifications where $property = $value.
     * 
     * @param  String $property must be a column in the database
     * @param  Mixed $value     usually an Integer or String
     * @return Array            which contains Notification objects
     */
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

    /**
     * Queries the Notifications table in the database to insert a Notification.
     * 
     * @param  Notification $notification 
     * @return Boolean                     if the operation was successful or not
     */
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

    /**
     * Queries the Notifications table in the database to remove a Notification.
     * 
     * @param  Integer $id 
     * @return Boolean     if the operation was successful or not
     */
    public static function remove($id){
        $stmt = Query::$db->prepare("DELETE FROM notifications WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

