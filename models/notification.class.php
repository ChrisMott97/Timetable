<?php

class Notification
{
    public $id;
    public $userid;
    public $title;
    public $description;
    public $request;
    public $completed;
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->userid = $data['userid'];
            $this->title = $data['title'];
            $this->description = $data['description'];
            $this->request = $data['request'];
            $this->completed = $data['completed'];
        }
    }

    // public function create(){
    //     Flight::get('query')->insertNotification($this);
    // }

    public function complete(){
        $this->completed = 1;
    }
    public function uncomplete(){
        $this->completed = 0;
    }
}

