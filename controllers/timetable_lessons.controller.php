<?php
class TimetableLessonsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        parent::routeProtect();
        
        $lessons = $this->query->selectRows("lessons", "year", $this->user->year);
        
        parent::navbar();
        Flight::render('timetable_lessons.view.php', ['user' => $this->user, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
    
    public function create(){
        parent::routeProtect();
        $subject = $_POST['subject'];
        $room = $_POST['room'];
        $teacher = $_POST['teacher'];
        $year = $this->user->year;
        $this->query->insertLesson($subject, $room, $teacher, $year);
        Flight::redirect('/timetable/lessons');
    }
    public function delete(){
        parent::routeProtect();
        $lessonid = $_POST['lesson_edit'];
        $this->query->removeRow('lessons', 'id', $lessonid);
        //Flight::render('test.view.php', ['lessonid'=>$lessonid]);
        Flight::redirect('/timetable/lessons');
    }
}