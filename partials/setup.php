<?php
session_start();

require './models/connection.class.php';
$cnnct = new Connection();
$db = $cnnct->create();//connection class used for connection to database

