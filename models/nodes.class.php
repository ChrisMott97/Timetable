<?php
/** Factory for Nodes table. */
class Nodes
{

    /**
     * Queries the Nodes table in the database for a single Node.
     * 
     * @param  Integer $nodeid 
     * @return Node         
     */
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

    /**
     * Queries the Nodes table in database for all Nodes.
     * 
     * @return Array of Node objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM nodes
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Node');
        return $stmt->fetchAll();
    }

    /**
     * Queries the Nodes table in the database for all Nodes where $property = $value.
     * 
     * @param  String $property must but a column in the database
     * @param  Mixed $value     usually an Integer or String
     * @return Array            which contains Node objects
     */
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

