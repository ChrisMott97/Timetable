<?php

class LoginController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /*
    GET /login
    */
    public function index(){
        parent::guestOnly();
        Flight::render('login.view.php');
        Flight::render('footer.view.php');
    }
    
    /*
    POST /login
    */
    public function auth(){
        $username = $this->query->selectCell('username','users','username',$_POST['username']);
        $hashedpass = $this->query->selectCell('password','users','username',$username);
        $id = $this->query->selectCell('id','users','username',$username);
        
        if($username && password_verify($_POST['password'], $hashedpass)){
            $_SESSION['id'] = $id;
            $_SESSION['loggedin'] = true;
            
            Flight::redirect('/home');
            exit;
        }
        
        Flight::redirect('/login');
    }
}
