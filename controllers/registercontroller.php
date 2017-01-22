<?php

class RegisterController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    /*
    GET /register
    */
    public static function index(){
        parent::guestOnly();
        parent::header();
        parent::navbar();
        Flight::render('register.view.php');
        Flight::render('footer.view.php');
    }
}
