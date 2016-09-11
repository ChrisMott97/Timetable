<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query());

require('controllers/index.controller.php');
$index = new IndexController;
require('controllers/login.controller.php');
$login = new LoginController;


