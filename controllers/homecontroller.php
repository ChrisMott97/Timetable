<?php
class HomeController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * GET /home.
     * 
     * Renders homepage view but only accessible if logged in.
     * 
     * @return View 
     */
    public static function index(){
        parent::routeProtect();
        parent::header();
        parent::navbar();
        Flight::render('home.view.php');
        Flight::render('footer.view.php');
    }
}
