<?php
class IndexController
{
    public function index(){
        $username = Flight::get('query')->selectCell('username', 'users', 'id',1);
        Flight::render('index.view.php', array('username' => $username));
    }
}