<?php
/** Holds a single record from the Notifications table. */
class Notification
{
    public $id;
    public $toid;
    public $fromid;
    public $title;
    public $description;
    public $request;
    public $completed;
    
    public $toUser;
    public $fromUser;
    
    public function __construct($data = null)
    {
        $this->toUser = Users::find($this->toid);
        $this->fromUser = Users::find($this->fromid);
    }

    /**
     * Sets completed status to complete.
     * 
     * @return void 
     */
    public function complete(){
        $this->completed = 1;
    }

    /**
     * Sets completed status to incomplete.
     * 
     * @return void 
     */
    public function uncomplete(){
        $this->completed = 0;
    }

    /**
     * Puts properties through validation criteria.
     * 
     * @return Boolean are all properties valid
     */
    public function validate(){
        if(!$this->title){
            $_SESSION['error'] = 'Please enter a title!';
            exit;
        }
        if(!$this->description){
            $_SESSION['error'] = 'Please enter a description!';
            exit;
        }
        return true;
    }
}

