<?php

class AccountInfoController extends Controller
{
    /**
     * GET /account
     */
    public static function index(){
        parent::routeProtect();
        parent::header();
        parent::navbar();
        Flight::render('accountinfo.view.php', ['user' => self::$user]);
        Flight::render('footer.view.php');
    }
}