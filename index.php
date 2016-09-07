<?php

$host = '127.0.0.1';
$dbname   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8';

$db = "mysql:host=$host;dbname=$dbname;charset=$charset";

require('views/index.views.php');