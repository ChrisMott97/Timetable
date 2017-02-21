<?php
/** Factory for Buildings table. */
class Buildings
{
    /**
     * Queries the buildings table in the database for a single building.
     * 
     * @param  Integer $id 
     * @return Building
     */
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM buildings WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Building');
        return $stmt->fetch();
    }
    /**
     * Queries buildings table in database for all buildings.
     * 
     * @return Array which contains Building objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('SELECT * FROM buildings');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Building');
        return $stmt->fetchAll();
    }
}

