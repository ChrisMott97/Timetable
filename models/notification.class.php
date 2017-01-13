<?php

class Notification
{
    public $id;
    public $userid;
    public $title;
    public $description;
    public $request;
    public $completed;
    
    public $user;
    
    public function __construct($data = null)
    {
        $this->user = Users::find($this->userid);
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

