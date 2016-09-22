<?php
class LogoutController extends Controller
{
    /*
    GET /logout
    */
    public function index(){
        $_SESSION['loggedin'] = false;
        $_SESSION['id'] = false;
        session_unset();
        session_destroy();
        Flight::redirect('/');
    }
}
