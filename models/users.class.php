<?php
/** Factory for Users table. */
class Users
{

    /**
     * Queries the Users table in the database for a single User.
     * 
     * @param  Integer $id 
     * @return User     
     */
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

    /**
     * Queries the Users table in the database for a single User by username.
     * 
     * @param  String $username 
     * @return User           
     */
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

    /**
     * Queries the Users table in the database for all Users.
     * 
     * @return Array which contains User objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM users
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }

    /**
     * Queries the Users table in the database for all Users where $property = $value.
     * 
     * @param  String $property must be a column in the table
     * @param  Mixed $value     usually Integer or String
     * @return Array            which contains User objects
     */
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM users 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }

    /**
     * Queries the Users table in the database to insert or update a given User.
     * 
     * @param  User   $user     if the $id field is present then update instead of insert
     * @return Boolean          was the operation successful
     */
    public static function save(User $user){
        if(!Users::find($user->id)){    //create
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
        } elseif (Users::find($user->id)) {     //update
            $hashpassword = password_hash($user->password, PASSWORD_DEFAULT);
            $user->password = $hashpassword;
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

    /**
     * Queries the Users table in the database and removes a given user.
     * 
     * @param  Integer $id 
     * @return Boolean     was the operation successful
     */
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

    /**
     * Queries the Users table in the database and checks if the given $username exists verifies if the hashed $password corrisponds correctly.
     * 
     * @param  String $username from form inserted upon login
     * @param  String $password from form inserted upon login (non-hashed)
     * @return Boolean           
     */
    public static function login($username, $password){
        $user = self::findByUsername($username);
        if(!$user){
            $_SESSION['error'] = 'Wrong username or password!';
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
        $_SESSION['error'] = 'Wrong username or password!';
        Flight::redirect('/login');
        // exit;
    }
}

