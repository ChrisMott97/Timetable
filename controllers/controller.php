<?php
class Controller
{
    public static $user;
    public static $query;
    public static $timetable;
    
    public function  __construct(){
        self::$query = Flight::get('query');
        if($this->authCheck()){
            $id = $_SESSION['id'];
            self::$user = new User;
            self::$timetable = new Timetable;
            
            $properties = self::$query->selectRow('users', 'id', $id);
            foreach ($properties as $property => $value)
            {
                self::$user->$property = $value;
            }
        }
        Flight::view()->set('user', self::$user);
    }
    
    public static function authCheck(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            return true;
        }
    }
    
    public static function navbar(){
        switch(self::$user->permission){
            case(1):
                return Flight::render('navbar/1.view.php');
                break;
            case(2):
                return Flight::render('navbar/1.view.php');
                break;
            case(3):
                return Flight::render('navbar/3.view.php');
                break;
            case(4):
                return Flight::render('navbar/1.view.php');
                break;
            case(5):
                return Flight::render('navbar/5.view.php');
                break;
        }
    }

    public static function header(){
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
            case('/lessons'):
                return Flight::render('header.view.php', ['title' => 'SP - Lessons', 'style' => 'lessons']);
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
    
    public static function routeProtect($minPermission = 1){
        if(!self::authCheck()){
            Flight::redirect('login');
            exit;
        }
        if(self::$user->permission < $minPermission){
            Flight::redirect('401');
            exit;
        }
    }
    
    public static function guestOnly(){
        if(self::authCheck()){
            Flight::redirect('home');
            exit;
        }
    }
}