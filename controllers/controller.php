<?php
class Controller
{
    public static $user;
    public static $timetable;
    
    public function  __construct(){
        if($this->authCheck()){
            $id = $_SESSION['id'];
            self::$user = Users::find($id);
            self::$timetable = new Timetable;
            
            // $properties = Users::find($id);
            // foreach ($properties as $property => $value)
            // {
            //     self::$user->$property = $value;
            // }
        }
        Flight::view()->set('user', self::$user);
    }
    
    public static function authCheck(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            return true;
        }
    }
    public static function navbar(){
        if(!self::authCheck()){
            return Flight::render('navbar/0.view.php');
        }
        $notifications = Notifications::findBy('userid', self::$user->id);
        $count = count($notifications);
        Flight::view()->set('notifications', $notifications);
        Flight::view()->set('count', $count);
        if(isset($_SESSION['error'])){
            Flight::view()->set('error', $_SESSION['error']);
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['warning'])){
            Flight::view()->set('warning', $_SESSION['warning']);
            unset($_SESSION['warning']);
        }
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
                return Flight::render('navbar/3.view.php');
                break;
            case(5):
                return Flight::render('navbar/5.view.php');
                break;
        }
    }

    public static function header(){
        switch($_SERVER['REQUEST_URI']){
            case('/'):
                $title = 'SchoolPlanner';
                $style = 'index';
                break;
            case('/home'):
                $title = 'SP - Home';
                $style = 'home';
                break;
            case('/login'):
                $title = 'SP - Login';
                $style = 'login';
                break;
            case('/timetable'):
                $title = 'SP - Timetable';
                $style = 'timetable';
                break;
            case('/lessons'):
                $title = 'SP - Lessons';
                $style = 'lessons';
                break;
            case('/directions'):
                $title = 'SP - Directions';
                $style = 'directions';
                break;
            case('/admin'):
                $title = 'Admin Dashboard';
                $style = 'admin';
                break; 
            default:
                $title = 'SchoolPlanner';
                $style = 'none';
                break;
        }
        return Flight::render('header.view.php', ['title' => $title, 'style' => $style]);
    }
    
    public static function routeProtect($minPermission = 1){
        if(!self::authCheck()){
            Flight::redirect('/login');
            exit;
        }
        if(self::$user->permission < $minPermission){
            Flight::redirect('/401');
            exit;
        }
    }
    
    public static function guestOnly(){
        if(self::authCheck()){
            Flight::redirect('/home');
            exit;
        }
    }

    public static function validate($item){
        $numargs = func_num_args();
        $listargs = func_get_args();
        switch ($item) {
            case 'directions':
                //Uses second argument ([1]) as 'from' and third ([2]) as 'to'
                if ( $numargs > 1 ){
                    if($listargs[1] == $listargs[2]){
                        return 0;
                    }
                }
                break;
            
            default:
                # code...
                break;
        }
    }
}