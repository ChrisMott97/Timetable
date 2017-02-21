<?php
/** Houses the connection method used throughout. */
class Query 
{
    public static $db;
    
    public function __construct(){
        
        self::$db = self::db();
        
    }
    
    /**
     * Creates connection to the database
     * @return PDO
     */
    private static function db()
    {
        if(getenv("CLEARDB_DATABASE_URL")){
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

            $server = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $db = substr($url["path"], 1);

            return new PDO('mysql:host='.$server.';dbname='.$db, $username, $password);
        }
    
        //return new PDO('mysql:host=localhost;dbname=schoolplanner', 'chris', 'denefield', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}
