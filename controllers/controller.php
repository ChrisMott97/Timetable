<?php
class Controller
{
    public function authCheck(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            return true;
        }
    }
    
    public function routeProtect(){
        if(!$this->authCheck()){
            Flight::redirect('login');
            exit;
        }
    }
    
    public function guestOnly(){
        if($this->authCheck()){
            Flight::redirect('home');
            exit;
        }
    }
}