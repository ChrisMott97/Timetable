<?php

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
    public function validate(){
        if($this->id){
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
            $valid = true;
            if($valid){
                return true;
            }else{
                return false;
            }
        }
    }
}

