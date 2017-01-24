<?php

class Error
{
    public static $message;

    public static function set($error = null){
        if($error = null){
            self::$message = "Error!";
        }
        self::$message = $error;
    }
    public static function get(){
        return self::$message;
    }
}

