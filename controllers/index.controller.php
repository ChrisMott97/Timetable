<?php
class IndexController
{
    public function index(){
        Flight::render('index.view.php', array('username' => 'Welcome!'));
    }
}