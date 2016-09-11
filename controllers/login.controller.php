<?php

class LoginController
{
    /*
    GET /login
    */
    public function index(){
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
            Flight::render('home.view.php', array('username', $username));
            exit;
        }
        
        Flight::render('login.view.php');
    }
}
