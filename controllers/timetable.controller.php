<?php
class TimetableController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        parent::routeProtect();
        
        $timetableids = $this->query->selectRows('sessions', 'userid', $this->user->id);
        foreach($timetableids as $timetableid){
            $period = $timetableid->period;
            $lessonid = $timetableid->lessonid;
            
            $subject = $this->query->selectCell('subject','lessons','id',$lessonid);
            $room = $this->query->selectCell('room','lessons','id',$lessonid);
            
            $label = $subject." ".$room;
                
            $this->timetable->$period = $label;
        }
        
        Flight::render('navbar.view.php');
        Flight::render('timetable.view.php', ['user' => $this->user, 'timetable' => $this->timetable]);
        Flight::render('footer.view.php');
    }
    
    public function edit(){
        parent::routeProtect();
        
        $timetableids = $this->query->selectRows('sessions', 'userid', $this->user->id);
        foreach($timetableids as $timetableid){
            $period = $timetableid->period;
            $lessonid = $timetableid->lessonid;
            
            $subject = $this->query->selectCell('subject','lessons','id',$lessonid);
            $room = $this->query->selectCell('room','lessons','id',$lessonid);
            
            $label = $subject." ".$room;
                
            $this->timetable->$period = $label;
        }
        
        $lessons = $this->query->selectRows("lessons", "year", $this->user->year);
        $periods = $this->query->selectCol('periods', 'code');
        
        Flight::render('navbar.view.php');
        Flight::render('timetable_edit.view.php', ['user' => $this->user, 'periods' => $periods, 'lessons' => $lessons,'timetable' => $this->timetable]);
        Flight::render('footer.view.php');
    }
    
    public function update(){
        parent::routeProtect();
        $sessions = $_POST['sessions'];
        $lessons = [];
        foreach($sessions as $period => $lessonid){
            if($this->query->selectCell2Props("sessionid", "sessions", "userid", $this->user->id, "period", $period)){
                $sessionid = $this->query->selectCell2Props("sessionid", "sessions", "userid", $this->user->id, "period", $period);
                $this->query->updateSession($lessonid, $sessionid);
            } else{
                $this->query->insertSession($this->user->id, $lessonid, $period);
            }
        }
    }
}