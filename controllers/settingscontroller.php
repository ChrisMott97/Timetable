<?php

class SettingsController extends Controller
{
    /**
     * GET /account.
     *
     * Allows logged in users to view their account page.
     * 
     * @return View 
     */
    public static function index(){
        parent::routeProtect();
        parent::header();
        parent::navbar();
        Flight::render('settings.view.php', ['user' => self::$user]);
        Flight::render('footer.view.php');
    }
    public static function password(){
        $pass = $_POST['pass'];
        parent::routeProtect();
        $current = self::$user;
        $current->password = $pass;
        $current->validate();
        Users::save($current);
    }
}