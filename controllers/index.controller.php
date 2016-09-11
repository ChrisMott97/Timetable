<?php
class IndexController extends Controller
{
    public function index(){
        Flight::render('index.view.php', array('username' => 'Welcome!'));
    }
}