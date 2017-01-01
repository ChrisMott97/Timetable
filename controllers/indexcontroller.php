<?php
class IndexController extends Controller
{
	/**
	 * GET /
	 */
    public static function index(){
        parent::guestOnly();
        parent::header();
        Flight::render('navbar/0.view.php');
        Flight::render('index.view.php');
        
        Flight::render('footer.view.php');
        //Flight::render('python.view.php');
    }
}