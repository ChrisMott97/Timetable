<?php
class LogoutController extends Controller
{
    /**
     * GET /logout.
     *
     * Clears all session data.
     * 
     * @return Void 
     */
    public static function index(){
        $_SESSION['loggedin'] = false;
        $_SESSION['id'] = false;
        session_unset();
        session_destroy();
        Flight::redirect('/');
    }
}
