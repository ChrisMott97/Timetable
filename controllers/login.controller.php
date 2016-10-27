<?php

class LoginController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /*
    GET /login
    */
    public static function index(){
        parent::guestOnly();
        parent::header();
        Flight::render('login.view.php');
        Flight::render('footer.view.php');
    }
    
    /*
    POST /login
    */
    public static function auth(){
        $username = self::$query->selectCell('username','users','username',$_POST['username']);
        $hashedpass = self::$query->selectCell('password','users','username',$username);
        $id = self::$query->selectCell('id','users','username',$username);
        
        if($username && password_verify($_POST['password'], $hashedpass)){
            $_SESSION['id'] = $id;
            $_SESSION['loggedin'] = true;
            
            Flight::redirect('/home');
            exit;
        }
        
        Flight::redirect('/login');
    }
}
