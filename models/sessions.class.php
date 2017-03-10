<?php
/** Factory for Sessions table. */
class Sessions
{

    /**
     * Queries the Sessions table in the database for all Sessions for a given $userid and $period.
     * 
     * @param  Integer $userid 
     * @param  String $period   in the form DayWeekLetterPeriod where Day = [Mon, Tue, Wed, Thu, Fri], WeekLetter = [A,B], Period = [1,6]
     * @return Array            which contains Session objects
     */
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

    /**
     * Queries the Session table in the database for a single Session.
     * 
     * @param  Integer $id 
     * @return Session     
     */
    public static function findById($id){
        $stmt = Query::$db->prepare('SELECT * FROM sessions WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetch();
    }

    /**
     * Queries the Sessions table in the database for all Sessions.
     * 
     * @return Array which contains Session objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM sessions
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetchAll();
    }

    /**
     * Queries the Sessions table in the database for all Sessions where $property = $value.
     * 
     * @param  String $property must be a column in the table
     * @param  Mixed $value     usually a String or Integer
     * @return Array            which contains Session objects
     */
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

    /**
     * Queries the Sessions table in the database and inserts or updates a given Session.
     * 
     * @param  Session $session     if $id field is present then Session will be updated not inserted
     * @return Boolean              was the operation successful
     */
    public static function save(Session $session){
        $fullSession = Sessions::find($session->userid, $session->period);
        if($fullSession){
            var_dump($fullSession);
            var_dump($session);
            // exit;
            $stmt = Query::$db->prepare("
                UPDATE sessions 
                SET userid = :userid,
                    lessonid = :lessonid,
                    period = :period
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

    public static function blank(User $user, $code){
        $session = new Session;
        $session->lessonName = "";
        $session->lessonTeacher = "";
        $session->lessonRoom = "";
        return $session;
    }

    /**
     * Queries the Sessions table in the database and removes a given Session.
     * 
     * @param  Integer $id 
     * @return Boolean     was the operation successful
     */
    public static function remove($id){
        $stmt = Query::$db->prepare("
            DELETE FROM sessions 
            WHERE id = :id
        ");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

