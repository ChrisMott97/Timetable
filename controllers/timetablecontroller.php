<?php
class TimetableController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    /**
     * GET /timetable
     */
    public static function index(){
        parent::routeProtect();
        
        $sessions = Sessions::findBy('userid', self::$user->id);
        foreach($sessions as $session){
            $period = $session->period;
            $lessonid = $session->lessonid;

            if(!Lessons::find($lessonid)){
                Sessions::remove($session->id);
                continue;
            } //if any lessons have been deleted, remove dead sessions and don't attempt to load
            
            $subject = Lessons::find($lessonid)->subject;
            $room = Lessons::find($lessonid)->room;
            
            $label = $subject." ".$room;
                
            self::$timetable->$period = $label;
        }
        
        parent::header();
        parent::navbar();
        Flight::render('timetable.view.php', ['user' => self::$user, 'timetable' => self::$timetable]);
        Flight::render('footer.view.php');
    }
    /**
     * GET /timetable/edit
     */
    public static function edit(){
        parent::routeProtect();
        
        $sessions = Sessions::findBy('userid', self::$user->id);
        foreach($sessions as $session){
            $period = $session->period;
            $lessonid = $session->lessonid;
            
            if(!Lessons::find($lessonid)){
                Sessions::remove($session->id);
                continue;
            } //if any lessons have been deleted, don't try to load them

            $subject = Lessons::find($lessonid)->subject;
            $room = Lessons::find($lessonid)->room;
            
            $label = $subject." ".$room;
                
            self::$timetable->$period = $label;
        }
        
        $lessons = Lessons::findBy('year', self::$user->year);
        $periods = Periods::findAll();
        
        parent::header();
        parent::navbar();
        Flight::render('timetable_edit.view.php', ['user' => self::$user, 'periods' => $periods, 'lessons' => $lessons,'timetable' => self::$timetable]);
        Flight::render('footer.view.php');
    }
    /**
     * POST /timetable/update
     */
    public static function update(){
        parent::routeProtect();
        $sessions = $_POST['sessions'];
        $lessons = [];
        foreach($sessions as $period => $lessonid){
            if($lessonid){
                $newSession = new Session;
                $newSession->userid = self::$user->id;
                $newSession->lessonid = $lessonid;
                $newSession->period = $period;
                Sessions::save($newSession);
            }
        }
    }
}