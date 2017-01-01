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
        
        $timetableids = Query::selectRows('sessions', 'userid', self::$user->id);
        foreach($timetableids as $timetableid){
            $period = $timetableid->period;
            $lessonid = $timetableid->lessonid;
            
            // $subject = Query::selectCell('subject','lessons','id',$lessonid);
            $subject = Lessons::find($lessonid)->subject;
            // $room = Query::selectCell('room','lessons','id',$lessonid);
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
        
        $timetableids = Query::selectRows('sessions', 'userid', self::$user->id);
        foreach($timetableids as $timetableid){
            $period = $timetableid->period;
            $lessonid = $timetableid->lessonid;
            
            // $subject = Query::selectCell('subject','lessons','id',$lessonid);
            $subject = Lessons::find($lessonid)->subject;
            // $room = Query::selectCell('room','lessons','id',$lessonid);
            $room = Lessons::find($lessonid)->room;
            
            $label = $subject." ".$room;
                
            self::$timetable->$period = $label;
        }
        
        //$lessons = Query::selectRows("lessons", "year", self::$user->year);
        $lessons = Lessons::findByYear(self::$user->year);
        $periods = Query::selectCol('periods', 'code');
        
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
            if(Query::selectCell2Props("sessionid", "sessions", "userid", self::$user->id, "period", $period)){
                $sessionid = Query::selectCell2Props("sessionid", "sessions", "userid", self::$user->id, "period", $period);
                Query::updateSession($lessonid, $sessionid);
            } else{
                Query::insertSession(self::$user->id, $lessonid, $period);
            }
        }
    }
}