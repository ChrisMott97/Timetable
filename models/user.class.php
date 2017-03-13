<?php
/** Holds a single record from the Users table. */
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

    /**
     * Puts all properties through validation
     * @return void 
     */
    public function validate(){
        if($this->id){
            if(!$this->username && !$this->firstname && !$this->lastname && !$this->password && !$this->year && !$this->permission){
                $_SESSION['warning'] = 'No user properties were modified.';
                exit;
            }
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
            if(!$this->firstname){
                $_SESSION['error'] = 'Please enter a firstname!';
                exit;
            }
            if(!$this->lastname){
                $_SESSION['error'] = 'Please enter a lastname!';
                exit;
            }
            if(!$this->year){
                $_SESSION['error'] = 'Please enter a year!';
                exit;
            }
            if(!$this->username){
                $_SESSION['error'] = 'Please enter a username!';
                exit;
            }
            if(Users::findByUsername($this->username)){
                $_SESSION['error'] = 'Username already exists!';
                exit;
            }
            if(strlen($this->username)<4){
                $_SESSION['error'] = 'Please enter a username of at least 4 characters!';
                exit;
            }
            if(!$this->password){
                $_SESSION['error'] = 'Please enter a password!';
                exit;
            }
            if(strlen($this->password)<7){
                $_SESSION['error'] = 'Please enter a password of at least 7 characters!';
                exit;
            }
        }

    }
}

