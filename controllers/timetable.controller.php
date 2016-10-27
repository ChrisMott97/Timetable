<?php
class TimetableController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public static function index(){
        parent::routeProtect();
        
        $timetableids = self::$query->selectRows('sessions', 'userid', self::$user->id);
        foreach($timetableids as $timetableid){
            $period = $timetableid->period;
            $lessonid = $timetableid->lessonid;
            
            $subject = self::$query->selectCell('subject','lessons','id',$lessonid);
            $room = self::$query->selectCell('room','lessons','id',$lessonid);
            
            $label = $subject." ".$room;
                
            self::$timetable->$period = $label;
        }
        
        parent::header();
        parent::navbar();
        Flight::render('timetable.view.php', ['user' => self::$user, 'timetable' => self::$timetable]);
        Flight::render('footer.view.php');
    }
    
    public static function edit(){
        parent::routeProtect();
        
        $timetableids = self::$query->selectRows('sessions', 'userid', self::$user->id);
        foreach($timetableids as $timetableid){
            $period = $timetableid->period;
            $lessonid = $timetableid->lessonid;
            
            $subject = self::$query->selectCell('subject','lessons','id',$lessonid);
            $room = self::$query->selectCell('room','lessons','id',$lessonid);
            
            $label = $subject." ".$room;
                
            self::$timetable->$period = $label;
        }
        
        $lessons = self::$query->selectRows("lessons", "year", self::$user->year);
        $periods = self::$query->selectCol('periods', 'code');
        
        parent::header();
        parent::navbar();
        Flight::render('timetable_edit.view.php', ['user' => self::$user, 'periods' => $periods, 'lessons' => $lessons,'timetable' => self::$timetable]);
        Flight::render('footer.view.php');
    }
    
    public static function update(){
        parent::routeProtect();
        $sessions = $_POST['sessions'];
        $lessons = [];
        foreach($sessions as $period => $lessonid){
            if(self::$query->selectCell2Props("sessionid", "sessions", "userid", self::$user->id, "period", $period)){
                $sessionid = self::$query->selectCell2Props("sessionid", "sessions", "userid", self::$user->id, "period", $period);
                self::$query->updateSession($lessonid, $sessionid);
            } else{
                self::$query->insertSession(self::$user->id, $lessonid, $period);
            }
        }
    }
}