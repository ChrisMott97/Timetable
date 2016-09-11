<?php
class HomeController extends Controller
{
    public function index(){
        parent::authCheck();
        Flight::render('home.view.php');
    }
}