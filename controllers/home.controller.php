<?php
class HomeController extends Controller
{
    public function index(){
        parent::routeProtect();
        Flight::render('navbar.view.php');
        Flight::render('home.view.php');
    }
}