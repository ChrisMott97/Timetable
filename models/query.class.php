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
//            return new PDO('mysql:host=eu-cdbr-azure-west-d.cloudapp.net;dbname=schoolplanner', 'bbb1325bbd9a81', '6a15ed22');
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
    
    public function selectCell2Props($property, $table, $refprop, $ref, $refprop2, $ref2){
        try {
            $stmt = $this->db->prepare("SELECT $property FROM $table WHERE $refprop = :ref AND $refprop2 = :ref2");
            $stmt->bindParam(':ref', $ref);
            $stmt->bindParam(':ref2', $ref2);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row[$property];
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function insertUser($user){
        try {
            $stmt = $this->db->prepare("INSERT INTO users (username, firstname, lastname, password, year) VALUES(:username, :firstname, :lastname, :password, :year)");
            $stmt->bindParam(':username', $user->username);
            $stmt->bindParam(':firstname', $user->firstname);
            $stmt->bindParam(':lastname', $user->lastname);
            $stmt->bindParam(':password', $user->password);
            $stmt->bindParam(':year', $user->year);
            $stmt->execute();
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
    
    public function selectTable($table){
        try {
            $stmt = $this->db->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $rowarray = $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function selectRows($table, $refprop, $ref){
        try {
            $stmt = $this->db->prepare("SELECT * FROM $table WHERE $refprop = :ref");
            $stmt->bindParam(':ref', $ref);
            $stmt->execute();
            return $rowarray = $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function selectCol($table, $col){
        try {
            $stmt = $this->db->prepare("SELECT $col FROM $table");
            $stmt->execute();
            return $colarray = $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function insertSession($userid, $lessonid, $period){
        try {
            $stmt = $this->db->prepare("INSERT INTO sessions (userid, lessonid, period) VALUES(:userid, :lessonid, :period)");
            $stmt->bindParam(':userid', $userid);
            $stmt->bindParam(':lessonid', $lessonid);
            $stmt->bindParam(':period', $period);
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function updateSession($lessonid, $sessionid){
        try {
            $stmt = $this->db->prepare("UPDATE sessions SET lessonid = :lessonid WHERE sessionid = :sessionid");
            $stmt->bindParam(':lessonid', $lessonid);
            $stmt->bindParam(':sessionid', $sessionid);
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function insertLesson($subject, $room, $teacher, $year){
        try {
            $stmt = $this->db->prepare("INSERT INTO lessons (subject, room, teacher, year) VALUES(:subject, :room, :teacher, :year)");
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':room', $room);
            $stmt->bindParam(':teacher', $teacher);
            $stmt->bindParam(':year', $year);
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function removeRow($table, $refprop, $ref){
        try {
            $stmt = $this->db->prepare("DELETE FROM $table WHERE $refprop = $ref");
//            $stmt->bindParam(':refprop', $refprop);
//            $stmt->bindParam(':ref', $ref);
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
}
