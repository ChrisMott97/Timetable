<?php

class User
{
    public $id;
    public $username;
    public $firstname;
    public $lastname;
    public $password;
    public $year;
    public $permission;
    
    public function create(){
        Flight::get('query')->insertUser($this);
    }
}

