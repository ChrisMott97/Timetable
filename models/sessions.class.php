<?php

class Sessions
{
    public static function find($userid, $period){
        $stmt = Query::$db->prepare('
            SELECT *
            FROM sessions
            WHERE userid = :userid AND period = :period
        ');
        $stmt->bindParam(':userid', $userid);
        $stmt->bindParam(':period', $period);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetch();
    }
    public static function findById($id){
        $stmt = Query::$db->prepare('SELECT * FROM sessions WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM sessions
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetchAll();
    }
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM sessions 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetchAll();
    }
    public static function save(Session $session){
        $fullSession = Sessions::find($session->userid, $session->period);
        if($fullSession){
            $stmt = Query::$db->prepare("
                UPDATE sessions 
                SET userid = :userid,
                    lessonid = :lessonid,
                    period = :period,
                WHERE id = :id
            ");
            $stmt->bindParam(':userid', $session->userid);
            $stmt->bindParam(':lessonid', $session->lessonid);
            $stmt->bindParam(':period', $session->period);
            $stmt->bindParam(':id', $fullSession->id);
            return $stmt->execute(); 
        } else{
            $stmt = Query::$db->prepare("
                INSERT INTO sessions 
                    (userid, lessonid, period) 
                VALUES
                    (:userid, :lessonid, :period)
            ");
            $stmt->bindParam(':userid', $session->userid);
            $stmt->bindParam(':lessonid', $session->lessonid);
            $stmt->bindParam(':period', $session->period);
            return $stmt->execute();
        }
    }
    public static function remove($id){
        $stmt = Query::$db->prepare("
            DELETE FROM sessions 
            WHERE id = :id
        ");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

