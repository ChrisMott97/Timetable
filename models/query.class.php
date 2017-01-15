<?php
class Query 
{
    
    public static $db;
    
    public function __construct(){
        
        self::$db = self::db();
        
    }
    //host: eu-cdbr-azure-west-d.cloudapp.net
    //username: bbb1325bbd9a81
    //password: 6a15ed22


    private static function db()
    {
        if(getenv("CLEARDB_DATABASE_URL")){
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

            $server = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $db = substr($url["path"], 1);

            return new PDO('mysql:host='.$server.';dbname='.$db, $username, $password);
        }
    
        return new PDO('mysql:host=localhost;dbname=schoolplanner', 'chris', 'denefield', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    
    public static function selectCell($property, $table, $refprop, $ref){
        $stmt = self::$db->prepare("SELECT $property FROM $table WHERE $refprop = :ref");
        $stmt->bindParam(':ref', $ref);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row[$property];
    }
    
    public static function selectCell2Props($property, $table, $refprop, $ref, $refprop2, $ref2){
        $stmt = self::$db->prepare("SELECT $property FROM $table WHERE $refprop = :ref AND $refprop2 = :ref2");
        $stmt->bindParam(':ref', $ref);
        $stmt->bindParam(':ref2', $ref2);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row[$property];
    }
    
    public static function insertNotification($notification){
        $stmt = self::$db->prepare("INSERT INTO notifications (userid, title, description, request) VALUES(:userid, :title, :description, :request)");
        $stmt->bindParam(':userid', $notification->userid);
        $stmt->bindParam(':title', $notification->title);
        $stmt->bindParam(':description', $notification->description);
        $stmt->bindParam(':request', $notification->request);
        $stmt->execute();
    }
    
    public static function selectRow($table, $refprop, $ref){
        $stmt = self::$db->prepare("SELECT * FROM $table WHERE $refprop = :ref");
        $stmt->bindParam(':ref', $ref);
        $stmt->execute();
        return $row = $stmt->fetch();
    }
    
    public static function selectTable($table){
        $stmt = self::$db->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $rowarray = $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public static function selectRows($table, $refprop, $ref){
        $stmt = self::$db->prepare("SELECT * FROM $table WHERE $refprop = :ref");
        $stmt->bindParam(':ref', $ref);
        $stmt->execute();
        return $rowarray = $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public static function selectCol($table, $col){
        $stmt = self::$db->prepare("SELECT $col FROM $table");
        $stmt->execute();
        return $colarray = $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public static function insertSession($userid, $lessonid, $period){
        $stmt = self::$db->prepare("INSERT INTO sessions (userid, lessonid, period) VALUES(:userid, :lessonid, :period)");
        $stmt->bindParam(':userid', $userid);
        $stmt->bindParam(':lessonid', $lessonid);
        $stmt->bindParam(':period', $period);
        $stmt->execute();
    }
    
    public static function updateSession($lessonid, $sessionid){
        $stmt = self::$db->prepare("UPDATE sessions SET lessonid = :lessonid WHERE id = :sessionid");
        $stmt->bindParam(':lessonid', $lessonid);
        $stmt->bindParam(':sessionid', $sessionid);
        $stmt->execute();
    }
    public static function insertLesson($subject, $room, $teacher, $year){
        $stmt = self::$db->prepare("INSERT INTO lessons (subject, room, teacher, year) VALUES(:subject, :room, :teacher, :year)");
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':room', $room);
        $stmt->bindParam(':teacher', $teacher);
        $stmt->bindParam(':year', $year);
        $stmt->execute();
    }
    public static function removeRow($table, $refprop, $ref){
        $stmt = self::$db->prepare("DELETE FROM $table WHERE $refprop = $ref");
//            $stmt->bindParam(':refprop', $refprop);
//            $stmt->bindParam(':ref', $ref);
        $stmt->execute();
    }
    
}
