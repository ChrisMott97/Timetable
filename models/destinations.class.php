<?php
/** Factory for Destinations table. */
class Destinations
{

    /**
     * Queries Destinations table in database for a single Destination.
     * 
     * @param  Integer $id 
     * @return Destination    
     */
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

    /**
     * Queries Destinations table in database for all Destinations.
     * 
     * @return Array which contains Destination objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM destinations
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Destination');
        return $stmt->fetchAll();
    }

    /**
     * Queries Destinations table in database for all records where $property = $value.
     * 
     * @param  String $property must be a column in the table
     * @param  Mixed $value     generally String or Integer
     * @return Array            which contains Destination objects
     */
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

