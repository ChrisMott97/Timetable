<?php
class IndexController extends Controller
{
    public function index(){
        parent::guestOnly();
        Flight::render('index.view.php', array('username' => 'Welcome!'));
    }
}