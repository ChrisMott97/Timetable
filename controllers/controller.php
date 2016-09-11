<?php
class Controller
{
    public function authCheck(){
        if(!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']){
            Flight::redirect('/login');
            exit;
        }
    }
}