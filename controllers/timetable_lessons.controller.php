<?php
class TimetableLessonsController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        parent::routeProtect();
        
        $lessons = $this->query->selectRows("lessons", "year", $this->user->year);
        
        Flight::render('navbar.view.php');
        Flight::render('timetable_lessons.view.php', ['user' => $this->user, 'lessons' => $lessons]);
        Flight::render('footer.view.php');
    }
    
    public function create(){
        parent::routeProtect();
        Flight::redirect('/timetable/lessons');
    }
    public function delete(){
        parent::routeProtect();
        Flight::redirect('/timetable/lessons');
    }
}