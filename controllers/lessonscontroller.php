<?php
class LessonsController extends Controller
{
    /**
     * GET /admin/lessons
     */
    public static function index(){
        parent::routeProtect(5);
        $lessons = Lessons::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/lessons.view.php', ['lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
    public static function create(){
        $newLesson = new Lesson;
        $newLesson->subject = $_POST['subject'];
        $newLesson->room = $_POST['room'];
        $newLesson->teacher = $_POST['teacher'];
        $newLesson->year = $_POST['year'];
        Lessons::save($newLesson);
    }
    public static function remove(){
        $id = $_POST['id'];
        Lessons::remove($id);
    }
    public static function update(){
        $id = $_POST['id'];
        $existingLesson = Lessons::find($id);
        $existingLesson->subject = $_POST['subject'];
        $existingLesson->room = $_POST['room'];
        $existingLesson->teacher = $_POST['teacher'];
        $existingLesson->year = $_POST['year'];
        Lessons::save($existingLesson);
    }
}