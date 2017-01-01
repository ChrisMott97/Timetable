<?php

class Lesson
{
    public $id;
    public $subject;
    public $room;
    public $teacher;
    public $year;
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->subject = $data['subject'];
            $this->room = $data['room'];
            $this->teacher = $data['teacher'];
            $this->year = $data['year'];
        }
    }
}

