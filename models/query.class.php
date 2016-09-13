<?php

class Query 
{
    
    private $db;
    
    public function __construct(){
        
        $this->db = $this->db();
        
    }
    //host: eu-cdbr-azure-west-d.cloudapp.net
    //username: bbb1325bbd9a81
    //password: 6a15ed22




    private function db()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=schoolplanner', 'chris', 'denefield');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function selectCell($property, $table, $refprop, $ref){
        try {
            $stmt = $this->db->prepare("SELECT $property FROM $table WHERE $refprop = :ref");
            $stmt->bindParam(':ref', $ref);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row[$property];
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function selectRow($table, $refprop, $ref){
        try {
            $stmt = $this->db->prepare("SELECT * FROM $table WHERE $refprop = :ref");
            $stmt->bindParam(':ref', $ref);
            $stmt->execute();
            return $row = $stmt->fetch();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
}
