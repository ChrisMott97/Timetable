<?php

class Users
{
    public static function find($id){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM users 
            WHERE id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
    public static function findByUsername($username){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM users 
            WHERE username = :username
        ');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM users
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM users 
            WHERE :property = :value
        ');
        $stmt->bindParam(':property', $property);
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
    public static function save(User $user){
        if(!Users::find($user->id)){    
            $hashpassword = password_hash($user->password, PASSWORD_DEFAULT);
            $user->password = $hashpassword;
            $stmt = Query::$db->prepare("
                INSERT INTO users 
                    (username, firstname, lastname, password, year, permission) 
                VALUES
                    (:username, :firstname, :lastname, :password, :year, :permission)
            ");
            $stmt->bindParam(':username', $user->username);
            $stmt->bindParam(':firstname', $user->firstname);
            $stmt->bindParam(':lastname', $user->lastname);
            $stmt->bindParam(':password', $user->password);
            $stmt->bindParam(':year', $user->year);
            $stmt->bindParam(':permission', $user->permission);
            return $stmt->execute();
        } elseif (Users::find($user->id)) {
            $stmt = Query::$db->prepare("
                UPDATE users
                SET username = :username,
                    firstname = :firstname,
                    lastname = :lastname,
                    password = :password,
                    year = :year,
                    permission = :permission
                WHERE id = :id
            ");
            $stmt->bindParam(':username', $user->username);
            $stmt->bindParam(':firstname', $user->firstname);
            $stmt->bindParam(':lastname', $user->lastname);
            $stmt->bindParam(':password', $user->password);
            $stmt->bindParam(':year', $user->year);
            $stmt->bindParam(':permission', $user->permission);
            $stmt->bindParam(':id', $user->id);
            return $stmt->execute();
        }
    }
    public static function remove($id){
        if(Users::find($id)){    
            $stmt = Query::$db->prepare("
                DELETE FROM users 
                WHERE id = :id
            ");
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }
    }
    public static function login($username, $password){
        $user = self::findByUsername($username);
        if(!$user){
            Flight::redirect('/login');
            exit;
        }
        $id = self::findByUsername($username)->id;
        $hashedPassword = self::findByUsername($username)->password;

        if($username && password_verify($password, $hashedPassword)){
            $_SESSION['id'] = $id;
            $_SESSION['loggedin'] = true;
            return true;
        }
        Flight::redirect('/login');
        // exit;
    }
}

