<?php
class IndexController extends Controller
{
    public function index(){
        parent::guestOnly();
        Flight::render('navbarguest.view.php');
        Flight::render('index.view.php', array('username' => 'Welcome!'));
    }
}