<?php

class LoginController extends Controller
{
    /*
    GET /login
    */
    public function index(){
        parent::guestOnly();
        Flight::render('login.view.php');
    }
    
    /*
    POST /login
    */
    public function auth(){
        $username = Flight::get('query')->selectCell('username','users','username',$_POST['username']);
        $hashedpass = Flight::get('query')->selectCell('password','users','username',$username);
        $id = Flight::get('query')->selectCell('id','users','username',$username);
        
        if($username && password_verify($_POST['password'], $hashedpass)){
            $_SESSION['id'] = $id;
            $_SESSION['loggedin'] = true;
            Flight::redirect('/home');
            exit;
        }
        
        Flight::redirect('/login');
    }
}
