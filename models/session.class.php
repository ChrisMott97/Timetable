<?php
/** Holds a single record from the Sessions table. */
class Session
{
    public $id;
    public $userid;
    public $lessonid;
    public $period;

    public $lessonName;
    public $lessonRoom;
    public $lessonTeacher;
    
    public function __construct($data = null)
    {
        if($this->lessonid){
            $this->findSubject();
        }
    }
    public function findSubject(){
        $lesson = Lessons::find($this->lessonid);
        $this->lessonName = $lesson->subject;
        $this->lessonRoom = $lesson->room;
        $this->lessonTeacher = $lesson->teacher;
    }
}

