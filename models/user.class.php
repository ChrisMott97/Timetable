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
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->username = $data['username'];
            $this->firstname = $data['firstname'];
            $this->lastname = $data['lastname'];
            $this->password = $data['password'];
            $this->year = $data['year'];
            $this->permissions = $data['permissions'];
        }
    }
}

