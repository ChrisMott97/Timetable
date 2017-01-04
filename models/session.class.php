<?php

class Session
{
    public $id;
    public $userid;
    public $lessonid;
    public $period;
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->userid = $data['userid'];
            $this->lessonid = $data['lessonid'];
            $this->period = $data['period'];
        }
    }
}

