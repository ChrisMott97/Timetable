<?php

class Users
{
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
    public static function findByUsername($username){
        $stmt = Query::$db->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('SELECT * FROM users');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
    public static function findByYear($year){
        $stmt = Query::$db->prepare('SELECT * FROM users WHERE year = :year');
        $stmt->bindParam(':year', $year);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
    public static function findByPermission($year){
        $stmt = Query::$db->prepare('SELECT * FROM users WHERE permission = :permission');
        $stmt->bindParam(':permission', $permission);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
    public static function save(User $user){
        if(!Users::findByUsername($user->username)){    
            $hashpassword = password_hash($user->password, PASSWORD_DEFAULT);
            $user->password = $hashpassword;
            $stmt = Query::$db->prepare("INSERT INTO users 
                (username, firstname, lastname, password, year, permission) 
                VALUES(:username, :firstname, :lastname, :password, :year, :permission)");
            $stmt->bindParam(':username', $user->username);
            $stmt->bindParam(':firstname', $user->firstname);
            $stmt->bindParam(':lastname', $user->lastname);
            $stmt->bindParam(':password', $user->password);
            $stmt->bindParam(':year', $user->year);
            $stmt->bindParam(':permission', $user->permission);
            return $stmt->execute();
        }
    }

}

