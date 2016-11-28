<?php

class Notification
{
    public $id;
    public $userid;
    public $title;
    public $description;
    public $request;
    
    public function create(){
        Flight::get('query')->insertNotification($this);
    }
}

