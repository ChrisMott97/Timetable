<?php
/** Holds a single record from the Lesson table. */
class Lesson
{
    public $id;
    public $subject;
    public $room;
    public $teacher;
    public $year;
    
    public function __construct($data = null){
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->subject = $data['subject'];
            $this->room = $data['room'];
            $this->teacher = $data['teacher'];
            $this->year = $data['year'];
        }
    }

    /**
     * Puts the Lesson object through validation criteria.
     * 
     * @return void     actions are taken automatically to fix validation or to warn the user
     */
    public function validate(){
        if($this->id){
            if(!$this->subject && !$this->room && !$this->teacher && !$this->year){
                $_SESSION['warning'] = 'No lesson properties were modified.';
                exit;
            }
            if(!$this->subject){
                $this->subject = Lessons::find($this->id)->subject;
            }
            if(!$this->room){
                $this->room = Lessons::find($this->id)->room;
            }
            if(!$this->teacher){
                $this->teacher = Lessons::find($this->id)->teacher;
            }
            if(!$this->year){
                $this->year = Lessons::find($this->id)->year;
            }
        }else{
            if(!$this->subject){
                $_SESSION['error'] = 'Please enter a subject!';
                exit;
            }
            if(!$this->room){
                $_SESSION['error'] = 'Please enter a room!';
                exit;
            }
            if(!$this->teacher){
                $_SESSION['error'] = 'Please enter a teacher!';
                exit;
            }
            if(!$this->year){
                $_SESSION['error'] = 'Please enter a year!';
                exit;
            }
        }
    }
}

