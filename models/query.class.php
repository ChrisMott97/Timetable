<?php

class Query 
{
    
    private $db;
    
    public function __construct(){
        
        $this->db = $this->db();
        
    }
    
    private function db()
    {
        try {
            return new PDO('mysql:host=eu-cdbr-azure-west-d.cloudapp.net;dbname=schoolplanner', 'bbb1325bbd9a81', '6a15ed22');
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
