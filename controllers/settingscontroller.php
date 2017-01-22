<?php

class SettingsController extends Controller
{
    /**
     * GET /account
     */
    public static function index(){
        parent::routeProtect();
        parent::header();
        parent::navbar();
        Flight::render('settings.view.php', ['user' => self::$user]);
        Flight::render('footer.view.php');
    }
}