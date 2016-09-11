<?php
class HomeController
{
    public function index(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            Flight::render('home.view.php');
            exit;
        }
        Flight::redirect('/login');
    }
}