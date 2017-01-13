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
        Users::login($_POST['username'], $_POST['password']);
        Flight::redirect('/home');
    }
}
