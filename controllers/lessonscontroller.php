<?php
class LessonsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public static function index(){
        parent::routeProtect();
        
        $lessons = self::$query->selectRows("lessons", "year", self::$user->year);
        
        parent::header();
        parent::navbar();
        Flight::render('lessons.view.php', ['user' => self::$user, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
    
    public static function create(){
        parent::routeProtect();
        $subject = $_POST['subject'];
        $room = $_POST['room'];
        $teacher = $_POST['teacher'];
        $year = self::$user->year;
        self::$query->insertLesson($subject, $room, $teacher, $year);
        Flight::redirect('/lessons');
    }
    public static function delete(){
        parent::routeProtect();
        $lessonid = $_POST['lesson_edit'];
        self::$query->removeRow('lessons', 'id', $lessonid);
        //Flight::render('test.view.php', ['lessonid'=>$lessonid]);
        Flight::redirect('/lessons');
    }
}