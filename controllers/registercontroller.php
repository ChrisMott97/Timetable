<?php

class RegisterController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * GET /register.
     *
     * Renders registration page, allows only guest to access.
     * 
     * @return View 
     */
    public static function index(){
        parent::guestOnly();
        parent::header();
        parent::navbar();
        Flight::render('register.view.php');
        Flight::render('footer.view.php');
    }
}
