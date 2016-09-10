<?php

class LoginController
{
    public function index(){
        Flight::render('login.view.php');
    }
    
    public function auth(){
        if(Flight::get('query')->selectCell('username','users','username',$_POST['username'])){
            if(Flight::get('query')->selectCell('password','users','username',$_POST['username']) == $_POST['password']){
                $username = $_POST['username'];
                Flight::render('home.view.php', array('username', $username));
                exit;
            }
        }
        
        Flight::render('login.view.php');
    }
}