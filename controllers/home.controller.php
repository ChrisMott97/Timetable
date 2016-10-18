<?php
class HomeController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        parent::routeProtect();
        parent::header();
        parent::navbar();
        Flight::render('home.view.php', array('user' => $this->user));
        Flight::render('footer.view.php');
    }
}
