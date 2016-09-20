<?php
class TimetableController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        parent::routeProtect();
        
        Flight::render('navbar.view.php');
        Flight::render('timetable.view.php', array('user' => $this->user));
        Flight::render('footer.view.php');
    }
    
    public function edit(){
        parent::routeProtect();
        
        $timetable = $this->query->selectTable('lessons');
        $periods = $this->query->selectCol('periods', 'code');
        
        Flight::render('navbar.view.php');
        Flight::render('timetable_edit.view.php', array('user' => $this->user, 'periods' => $periods));
        Flight::render('footer.view.php');
    }
}