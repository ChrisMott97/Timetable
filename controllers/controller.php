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
        Flight::view()->set('user', $this->user);
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

    public function header(){
        switch($_SERVER['REQUEST_URI']){
            case('/'):
                return Flight::render('header.view.php', ['title' => 'SchoolPlanner', 'style' => 'index']);
                break;
            case('/home'):
                return Flight::render('header.view.php', ['title' => 'SP - Home', 'style' => 'home']);
                break;
            case('/login'):
                return Flight::render('header.view.php', ['title' => 'SP - Login', 'style' => 'login']);
                break;
            case('/timetable'):
                return Flight::render('header.view.php', ['title' => 'SP - Timetable', 'style' => 'timetable']);
                break;
            case('/directions'):
                return Flight::render('header.view.php', ['title' => 'SP - Directions', 'style' => 'directions']);
                break;
            case('/admin'):
                return Flight::render('header.view.php', ['title' => 'Admin Dashboard', 'style' => 'admin']);
                break; 
            default:
                return Flight::render('header.view.php', ['title' => 'SchoolPlanner', 'style' => 'none']);
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