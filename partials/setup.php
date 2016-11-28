<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query);

require('models/user.class.php');
require('models/timetable.class.php');
require('models/lesson.class.php');
require('models/notification.class.php');

require('controllers/controller.php');
Flight::set('app', new Controller);

spl_autoload_register(function ($class_name) {
    include '/controllers/' . strtolower($class_name) . '.php';
});
