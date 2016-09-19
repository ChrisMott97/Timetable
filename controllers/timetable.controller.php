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
        
        Flight::render('navbar.view.php');
        Flight::render('timetable_edit.view.php', array('user' => $this->user));
        Flight::render('footer.view.php');
    }
}