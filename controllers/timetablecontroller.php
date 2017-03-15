<?php
class TimetableController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * GET /timetable.
     *
     * Retrieves all sessions and loads to timetable view.
     * 
     * @return View 
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
            
            // $subject = Lessons::find($lessonid)->subject;
            // $room = Lessons::find($lessonid)->room;
            
            // $label = $subject." ".$room;
            
            self::$timetable->$period = $session;
        }
        self::$timetable->validate(self::$user);

       
        parent::header();
        parent::navbar();
        Flight::render('timetable.view.php', ['user' => self::$user, 'timetable' => self::$timetable]);
        Flight::render('footer.view.php');
    }
    
    /**
     * GET /timetable/edit.
     *
     * Loads all sessions then renders timetable edit view.
     * 
     * @return View 
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

            // $subject = Lessons::find($lessonid)->subject;
            // $room = Lessons::find($lessonid)->room;
            
            // $label = $subject." ".$room;
                
            // self::$timetable->$period = $label;
            self::$timetable->$period = $session;
        }
        self::$timetable->validate(self::$user);
        if(self::$user->year == 0){
            $lessons = Lessons::findBy('teacher', self::$user->username);
        }
        else{
            $lessons = Lessons::findBy('year', self::$user->year);
        }
        $periods = Periods::findAll();
        
        parent::header();
        parent::navbar();
        Flight::render('timetable_edit.view.php', ['user' => self::$user, 'periods' => $periods, 'lessons' => $lessons,'timetable' => self::$timetable]);
        Flight::render('footer.view.php');
    }
    
    /**
     * POST /timetable/update.
     *
     * Retrieves sessions then saves to Sessions table using Sessions factory model.
     * 
     * @return Void 
     */
    public static function update(){
        parent::routeProtect();
        $sessions = $_POST['sessions'];
        $lessons = [];
        foreach($sessions as $period => $lessonid){
            if($lessonid){
                // if($lessonid = '-1'){
                //     $session = Sessions::find(self::$user->id, $period);
                //     Sessions::remove($session);
                //     continue;
                // }
                $newSession = new Session;
                $newSession->userid = self::$user->id;
                $newSession->lessonid = $lessonid;
                $newSession->period = $period;
                Sessions::save($newSession);
            }
        }
    }
}