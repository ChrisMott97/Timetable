<?php

// Web

Flight::route('GET /', ['IndexController','index']);
Flight::route('GET /home', ['HomeController','index']);
Flight::route('GET /logout', ['LogoutController','index']);
Flight::route('GET /@ecode:[0-9]{3}', ['ErrorController','index']);
Flight::route('GET /settings', ['SettingsController','index']);
Flight::route('GET /search', ['SearchController','index']);

Flight::route('GET /notifications', ['NotificationsController','index']);

Flight::route('GET /timetable', ['TimetableController','index']);
Flight::route('GET /timetable/edit', ['TimetableController','edit']);
Flight::route('POST /timetable/update', ['TimetableController','update']);

Flight::route('GET /directions', ['DirectionsController','index']);
Flight::route('POST /directions', ['DirectionsController','redirect']);
Flight::route('GET /directions/@from/@to', ['DirectionsController','calculate']);


Flight::route('GET /admin', function(){
	Flight::redirect('/admin/users');
});

Flight::route('GET /admin/users', ['UsersController','index']);							//User management page
Flight::route('POST /admin/users', ['UsersController','create']); 						//Create new user
Flight::route('POST /admin/users/@id', ['UsersController','update']); 					//Update existing user
Flight::route('DELETE /admin/users/@id', ['UsersController','remove']); 				//Delete existing user

Flight::route('GET /admin/notifications', ['NotificationsController','admin']);			//Notification management page
Flight::route('POST /admin/notifications', ['NotificationsController','create']);		//Create new notification
Flight::route('DELETE /admin/notifications/@id', ['NotificationsController','remove']);	//Delete existing notification

Flight::route('GET /admin/lessons', ['LessonsController','index']);						//Lessons management page
Flight::route('POST /admin/lessons', ['LessonsController','create']);					//Create new lesson
Flight::route('POST /admin/lessons/@id', ['LessonsController','update']);				//Update existing lesson
Flight::route('DELETE /admin/lessons/@id', ['LessonsController','remove']);				//Delete existing lesson


Flight::route('GET /teacher', ['TeacherController','index']);

Flight::route('GET /login', ['LoginController','index']);
Flight::route('POST /login', ['LoginController','auth']);
Flight::route('GET /register', ['RegisterController','index']);
