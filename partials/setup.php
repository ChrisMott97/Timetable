<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query);

require('models/user.class.php');

require('controllers/controller.php');
Flight::set('app', new Controller);

require('controllers/index.controller.php');
$index = new IndexController;
require('controllers/error.controller.php');
$error = new ErrorController;
require('controllers/login.controller.php');
$login = new LoginController;
require('controllers/logout.controller.php');
$logout = new LogoutController;
require('controllers/home.controller.php');
$home = new HomeController;
require('controllers/admin.controller.php');
$admin = new AdminController;
require('controllers/accountinfo.controller.php');
$account = new AccountinfoController;


