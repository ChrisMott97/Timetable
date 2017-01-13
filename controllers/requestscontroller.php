<?php
class RequestsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    /**
     * GET /lessons
     */
    public static function index(){
        parent::routeProtect();
        
        $lessons = Lessons::findBy('year', self::$user->year);
        
        parent::header();
        parent::navbar();
        Flight::render('lessons.view.php', ['user' => self::$user, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
    /**
     * POST /lessons/create
     */
    public static function create(){
        parent::routeProtect();
        $newLesson = new Lesson;
        $newLesson->subject = $_POST['subject'];
        $newLesson->room = $_POST['room'];
        $newLesson->teacher = $_POST['teacher'];
        $newLesson->year = self::$user->year;
        Lessons::save($newLesson);
        Flight::redirect('/lessons');
    }
    /**
     * POST /lessons/delete
     */
    public static function delete(){
        parent::routeProtect();
        $id = $_POST['lesson_delete'];
        Lessons::remove($id);
        Flight::redirect('/lessons');
    }
}