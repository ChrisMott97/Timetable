<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query());

require('controllers/controller.php');
$controller = new Controller;

require('controllers/index.controller.php');
$index = new IndexController;
require('controllers/login.controller.php');
$login = new LoginController;
require('controllers/logout.controller.php');
$logout = new LogoutController;
require('controllers/home.controller.php');
$home = new HomeController;


