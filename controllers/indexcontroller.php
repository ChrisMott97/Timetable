<?php
class IndexController extends Controller
{
	
    /**
     * GET /.
     * 
     * Renders index page and ensures only guest can view it.
     * 
     * @return View 
     */
    public static function index(){
        parent::guestOnly();
        parent::header();
        Flight::render('navbar/0.view.php');
        Flight::render('index.view.php');
        Flight::render('footer.view.php');
    }
}