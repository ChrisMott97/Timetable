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
    public function validate(){
        if($this->id){
            if(!$this->username){
                $this->username = Users::find($this->id)->username;
            }
            if(!$this->firstname){
                $this->firstname = Users::find($this->id)->firstname;
            }
            if(!$this->lastname){
                $this->lastname = Users::find($this->id)->lastname;
            }
            if(!$this->password){
                $this->password = Users::find($this->id)->password;
            }
            if(!$this->year){
                $this->year = Users::find($this->id)->year;
            }
            if(!$this->permission){
                $this->permission = Users::find($this->id)->permission;
            }
        }else{
            $valid = true;
            if(Users::findByUsername($this->username)){
                $valid = false;
            }
            if($valid){
                return true;
            }else{
                return false;
            }
        }

    }
}

