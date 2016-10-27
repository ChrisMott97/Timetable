<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query);

require('models/user.class.php');
require('models/timetable.class.php');
require('models/lesson.class.php');

require('controllers/controller.php');
Flight::set('app', new Controller);

require('controllers/index.controller.php');
require('controllers/error.controller.php');
require('controllers/login.controller.php');
require('controllers/logout.controller.php');
require('controllers/home.controller.php');
require('controllers/admin.controller.php');
require('controllers/accountinfo.controller.php');
require('controllers/timetable.controller.php');
require('controllers/timetable_lessons.controller.php');
require('controllers/directions.controller.php');
require('controllers/search.controller.php');