<?php

class Timetable
{
    public $FriA1;
    public $FriA2;
    public $FriA3;
    public $FriA4;
    public $FriA5;
    public $FriA6;
    public $FriB1;
    public $FriB2;
    public $FriB3;
    public $FriB4;
    public $FriB5;
    public $FriB6;
    public $MonA1;
    public $MonA2;
    public $MonA3;
    public $MonA4;
    public $MonA5;
    public $MonA6;
    public $MonB1;
    public $MonB2;
    public $MonB3;
    public $MonB4;
    public $MonB5;
    public $MonB6;
    public $ThuA1;
    public $ThuA2;
    public $ThuA3;
    public $ThuA4;
    public $ThuA5;
    public $ThuA6;
    public $ThuB1;
    public $ThuB2;
    public $ThuB3;
    public $ThuB4;
    public $ThuB5;
    public $ThuB6;
    public $TueA1;
    public $TueA2;
    public $TueA3;
    public $TueA4;
    public $TueA5;
    public $TueA6;
    public $TueB1;
    public $TueB2;
    public $TueB3;
    public $TueB4;
    public $TueB5;
    public $TueB6;
    public $WedA1;
    public $WedA2;
    public $WedA3;
    public $WedA4;
    public $WedA5;
    public $WedA6;
    public $WedB1;
    public $WedB2;
    public $WedB3;
    public $WedB4;
    public $WedB5;
    public $WedB6;

    public function validate($user){
        $periods = Periods::findAll();
        foreach($periods as $period){
            $code = $period->code;
            if(!$this->$code){
                $this->$code = Sessions::blank($user, $code);
            }
        }
    }
}

