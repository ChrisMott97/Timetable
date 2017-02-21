<?php
/** Factory for the Periods table. */
class Periods
{

    /**
     * Queries the Periods table in the database for a single Period.
     * 
     * @param  String $code in form DayWeekLetterPeriod where Day = [Mon,Tue,Wed,Thu,Fri], WeekLetter = [A,B], Period = [1-6] eg MonA1  
     * @return Period
     */
    public static function find($code){
        $stmt = Query::$db->prepare('SELECT * FROM periods WHERE code = :code');
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Period');
        return $stmt->fetch();
    }

    /**
     * Queries the Periods table in the database for all Periods.
     * 
     * @return Array which contains Period objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM periods
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Period');
        return $stmt->fetchAll();
    }

    /**
     * Queries the Periods table in the database for all Periods where $property = $value.
     * 
     * @param  String $property must be a column in the table
     * @param  Mixed $value    usually a String or Integer
     * @return Array           which contains Period objects
     */
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

