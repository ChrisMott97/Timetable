<?php

class Destination
{
    public $id;
    public $nodeid;
    public $room;
    public $building;
    public $level;
    public $forLessons;
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->nodeid = $data['nodeid'];
            $this->room = $data['room'];
            $this->building = $data['building'];
            $this->level = $data['level'];
            $this->forLessons = $data['forLessons'];
        }
    }
}

