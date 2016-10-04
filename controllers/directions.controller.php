<?php
class DirectionsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        parent::routeProtect();
        
        Flight::render('navbar.view.php');
        Flight::render('directions.view.php', array('user' => $this->user));
        Flight::render('footer.view.php');
    }
}