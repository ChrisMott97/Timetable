<?php
class DirectionsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public static function index(){
        parent::routeProtect();
        
        parent::header();
        parent::navbar();
        Flight::render('directions.view.php', ['user' => self::$user]);
        Flight::render('footer.view.php');
    }
}