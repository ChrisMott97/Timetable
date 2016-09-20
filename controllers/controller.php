<?php
class Controller
{
    public $user;
    public $query;
    
    public function  __construct(){
        $this->query = Flight::get('query');
        if($this->authCheck()){
            $id = $_SESSION['id'];
            $this->user = new User;
            
            $properties = $this->query->selectRow('users', 'id', $id);
            foreach ($properties as $property => $value)
            {
                $this->user->$property = $value;
            }
        }
    }
    
    public function authCheck(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            return true;
        }
    }
    
    public function routeProtect($minPermission = 1){
        if(!$this->authCheck()){
            Flight::redirect('login');
            exit;
        }
        if($this->user->permission < $minPermission){
            Flight::redirect('401');
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