<?php
class DirectionsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public static function index(){
        parent::routeProtect();
        $rooms = self::$query->selectTable('rooms');
        parent::header();
        parent::navbar();
        Flight::render('directions.view.php', ['user' => self::$user, 'rooms' => $rooms]);
        Flight::render('footer.view.php');
    }
}