<?php
class Controller
{
    public $user;
    public $query;
    public $timetable;
    
    public function  __construct(){
        $this->query = Flight::get('query');
        if($this->authCheck()){
            $id = $_SESSION['id'];
            $this->user = new User;
            $this->timetable = new Timetable;
            
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
    
    public function navbar(){
        switch($this->user->permission){
            case(1):
                return Flight::render('navbar/1.view.php');
                break;
            case(2):
                return Flight::render('navbar/1.view.php');
                break;
            case(3):
                return Flight::render('navbar/1.view.php');
                break;
            case(4):
                return Flight::render('navbar/1.view.php');
                break;
            case(5):
                return Flight::render('navbar/5.view.php');
                break;
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