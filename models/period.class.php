<?php

class Period
{
    public $order;
    public $code;
    public $day;
    public $week;
    public $time_start;
    public $time_end;
    public $length;
    public $period;
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['order'])) $this->order = $data['order'];
            
            $this->code = $data['code'];
            $this->day = $data['day'];
            $this->week = $data['week'];
            $this->time_start = $data['time_start'];
            $this->time_end = $data['time_end'];
            $this->length = $data['length'];
            $this->period = $data['period'];
        }
    }
}

