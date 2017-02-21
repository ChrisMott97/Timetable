<?php

class LoginController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * GET /login
     * 
     * Renders the login page but only if the user is a guest.
     * 
     * @return View 
     */
    public static function index(){
        parent::guestOnly();
        parent::header();
        Flight::render('login.view.php');
        Flight::render('footer.view.php');
    }
    
    /**
     * POST /login.
     *
     * Takes form input and sends it to the Users factory model for authentication.
     * 
     * @return Void 
     */
    public static function auth(){
        Users::login($_POST['username'], $_POST['password']);
        Flight::redirect('/home');
    }
}
