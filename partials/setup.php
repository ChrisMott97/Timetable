<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query);

require('models/user.class.php');
require('models/users.class.php');

require('models/timetable.class.php');

require('models/notification.class.php');
require('models/notifications.class.php');

require('models/building.class.php');
require('models/buildings.class.php');

require('models/destination.class.php');
require('models/destinations.class.php');

require('models/lesson.class.php');
require('models/lessons.class.php');

 require('models/session.class.php');
require('models/sessions.class.php');
 
require('controllers/controller.php');
Flight::set('app', new Controller);

spl_autoload_register(function ($class_name) {
    include '/controllers/' . strtolower($class_name) . '.php';
});
