<?php

class Connection 
{
    
    public function create()
    {
        try {
            return new PDO('mysql:host=eu-cdbr-azure-west-d.cloudapp.net;dbname=schoolplanner', 'bbb1325bbd9a81', '6a15ed22');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
}