<?php

// Web

Flight::route('GET /', ['IndexController','index']);
Flight::route('GET /home', ['HomeController','index']);
Flight::route('GET /logout', ['LogoutController','index']);
Flight::route('GET /@ecode:[0-9]{3}', ['ErrorController','index']);
Flight::route('GET /search', ['SearchController','index']);

Flight::route('GET /settings', ['SettingsController','index']);
Flight::route('POST /settings/password', ['SettingsController','password']);

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
Flight::route('GET /teacher', function(){
	Flight::redirect('/teacher/users');
});

Flight::route('GET /admin/users', ['UsersController','admin']);							//User management page
Flight::route('GET /teacher/users', ['UsersController','teacher']);						//User management page
Flight::route('POST /services/users', ['UsersController','create']); 						//Create new user
Flight::route('POST /services/users/@id', ['UsersController','update']); 					//Update existing user
Flight::route('DELETE /services/users/@id', ['UsersController','remove']); 				//Delete existing user

Flight::route('GET /admin/notifications', ['NotificationsController','admin']);			//Notification management page
Flight::route('GET /teacher/notifications', ['NotificationsController','teacher']);		//Notification management page
Flight::route('POST /services/notifications', ['NotificationsController','create']);		//Create new notification
Flight::route('DELETE /services/notifications/@id', ['NotificationsController','remove']);	//Delete existing notification

Flight::route('GET /admin/lessons', ['LessonsController','admin']);						//Lessons management page
Flight::route('GET /teacher/lessons', ['LessonsController','teacher']);						//Lessons management page
Flight::route('POST /services/lessons', ['LessonsController','create']);					//Create new lesson
Flight::route('POST /services/lessons/@id', ['LessonsController','update']);				//Update existing lesson
Flight::route('DELETE /services/lessons/@id', ['LessonsController','remove']);				//Delete existing lesson







Flight::route('GET /login', ['LoginController','index']);
Flight::route('POST /login', ['LoginController','auth']);
Flight::route('GET /register', ['RegisterController','index']);
