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
    
    /**
     * Checks if the user is logged in.
     * 
     * @return Boolean 
     */
    public static function authCheck(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            return true;
        }
    }

    /**
     * If error values have been set, cue the warning and errors to render.
     * 
     * @return Void 
     */
    private static function errorCheck(){
        if(isset($_SESSION['error'])){
            Flight::view()->set('error', $_SESSION['error']);
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['warning'])){
            Flight::view()->set('warning', $_SESSION['warning']);
            unset($_SESSION['warning']);
        }
    }

    /**
     * Decides which navbar to render based on permissions and gets notifications.
     * 
     * @return View 
     */
    public static function navbar(){
        if(!self::authCheck()){
            return Flight::render('navbar/0.view.php');
        }
        $notifications = Notifications::findBy('toid', self::$user->id);
        $count = count($notifications);
        Flight::view()->set('notifications', $notifications);
        Flight::view()->set('count', $count);
        self::errorCheck();
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
            default:
                return Flight::render('navbar/5.view.php');
        }
    }

    /**
     * Uses the request URI to decide the title of the page and the css document it will use.
     * 
     * @return View 
     */
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
    
    /**
     * Protects a given Controller method by setting a permission level requirement.
     * 
     * @param  Integer $minPermission minimum permission level required to allow access
     * @return Void                 
     */
    public static function routeProtect($minPermission = 1){
        if(!self::authCheck()){
            Flight::redirect('/login');
            exit;
        }
        if(self::$user->permission < $minPermission){
            self::header();
            self::navbar();
            Flight::render('errors/401.view.php');
            Flight::render('footer.view.php');
            exit;
        }
    }
    
    /**
     * To ensure guest pages can't be accessed by a logged in user (such as index, login and register).
     * 
     * @return Void 
     */
    public static function guestOnly(){
        if(self::authCheck()){
            Flight::redirect('/home');
            exit;
        }
    }
}