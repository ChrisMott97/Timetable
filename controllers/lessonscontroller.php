<?php
class LessonsController extends Controller
{
    /**
     * GET /admin/lessons.
     *
     * Renders lesson management for admins only.
     * 
     * @return View 
     */
    public static function index(){
        parent::routeProtect(5);
        $lessons = Lessons::findAll();
        parent::header();
        parent::navbar();
        Flight::render('admin/lessons/lessons.view.php', ['lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
    
    /**
     * POST /admin/lessons.
     *
     * Creates a new Lesson object based on post data, validates it, then saves it with the Lessons factory model.
     * 
     * @return Void 
     */
    public static function create(){
        $newLesson = new Lesson;
        $newLesson->subject = $_POST['subject'];
        $newLesson->room = $_POST['room'];
        $newLesson->teacher = $_POST['teacher'];
        $newLesson->year = $_POST['year'];
        $newLesson->validate();
        Lessons::save($newLesson);
    }
    
    /**
     * DELETE /admin/lessons/@id.
     *
     * Removes a given lessons.
     * 
     * @param  Integer $id 
     * @return Void     
     */
    public static function remove($id){
        Lessons::remove($id);
    }
    
    /**
     * POST /admin/lessons/@id.
     *
     * Retrieves a Lesson object, updates and validates it, then saves it with the Lessons factory model.
     * 
     * @param  Integer $id 
     * @return Void     
     */
    public static function update($id){
        $existingLesson = Lessons::find($id);
        $existingLesson->subject = $_POST['subject'];
        $existingLesson->room = $_POST['room'];
        $existingLesson->teacher = $_POST['teacher'];
        $existingLesson->year = $_POST['year'];
        $existingLesson->validate();
        Lessons::save($existingLesson);
    }
}