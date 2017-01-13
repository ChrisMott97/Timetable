<?php

// Web

Flight::route('GET /', ['IndexController','index']);
Flight::route('GET /home', ['HomeController','index']);
Flight::route('GET /logout', ['LogoutController','index']);
Flight::route('GET /@ecode:[0-9]{3}', ['ErrorController','index']);
Flight::route('GET /account', ['AccountInfoController','index']);
Flight::route('GET /search', ['SearchController','index']);

Flight::route('GET /timetable', ['TimetableController','index']);
Flight::route('GET /timetable/edit', ['TimetableController','edit']);
Flight::route('POST /timetable/update', ['TimetableController','update']);

Flight::route('GET /lessons', ['RequestsController', 'index']);
Flight::route('POST /lessons/create', ['RequestsController', 'create']);
Flight::route('POST /lessons/delete', ['RequestsController', 'delete']);

Flight::route('GET /directions', ['DirectionsController','index']);
Flight::route('POST /directions', ['DirectionsController','redirect']);
Flight::route('GET /directions/@from/@to', ['DirectionsController','calculate']);


Flight::route('GET /admin', function(){
	Flight::redirect('/admin/users');
});

Flight::route('GET /admin/users', ['UsersController','index']);						//User management page
Flight::route('POST /admin/users', ['UsersController','create']); 					//Create new user
Flight::route('PUT /admin/users/@id', ['UsersController','update']); 					//Update existing user
Flight::route('DELETE /admin/users/@id', ['UsersController','remove']); 				//Delete existing user

Flight::route('GET /admin/notifications', ['NotificationsController','index']);		//Notification management page
Flight::route('POST /admin/notifications', ['NotificationsController','create']);	//Create new notification
Flight::route('DELETE /admin/notifications/@id', ['NotificationsController','remove']);	//Delete existing notification

Flight::route('GET /admin/lessons', ['LessonsController','index']);					//Lessons management page
Flight::route('POST /admin/lessons', ['LessonsController','create']);				//Create new lesson
Flight::route('PUT /admin/lessons/@id', ['LessonsController','update']);				//Update existing lesson
Flight::route('DELETE /admin/lessons/@id', ['LessonsController','remove']);				//Delete existing lesson


Flight::route('GET /teacher', ['TeacherController','index']);

Flight::route('GET /login', ['LoginController','index']);
Flight::route('POST /login', ['LoginController','auth']);

// REST API

// Flight::route('GET /api/users', ['apiUserController', 'readAllUsers']);
// Flight::route('POST /api/users', ['apiUserController', 'createOneUser']);
// Flight::route('GET /api/users/@userid', ['apiUserController', 'readOneUser']);
// Flight::route('PUT /api/users/@userid', ['apiUserController', 'updateOneUser']);
// Flight::route('DELETE /api/users/@userid', ['apiUserController', 'deleteOneUser']);

// Flight::route('GET /api/users/@userid/timetable', ['apiTimetableController', 'readAllPeriods']);
// Flight::route('POST /api/users/@userid/timetable', ['apiTimetableController', 'createOnePeriod']);
// Flight::route('GET /api/users/@userid/timetable/@period', ['apiTimetableController', 'readOnePeriod']);
// Flight::route('PUT /api/users/@userid/timetable/@period', ['apiTimetableController', 'updateOnePeriod']);
// Flight::route('DELETE /api/users/@userid/timetable/@period', ['apiTimetableController', 'deleteOnePeriod']);

// Flight::route('GET /api/lessons', ['apiLessonController', 'readAllLessons']);
// Flight::route('GET /api/lessons/years/@year', ['apiLessonController', 'readYearLessons']);
// Flight::route('POST /api/lessons', ['apiLessonController', 'createOneLesson']);
// Flight::route('GET /api/lessons/ids/@lessonid', ['apiLessonController', 'readOneLesson']);
// Flight::route('PUT /api/lessons/ids/@lessonid', ['apiLessonController', 'updateOneLesson']);
// Flight::route('DELETE /api/lessons/ids/@lessonid', ['apiLessonController', 'deleteOneLesson']);