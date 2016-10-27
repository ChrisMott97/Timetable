<?php

// Web
Flight::route('GET /', ['IndexController','index']);
Flight::route('GET /login', ['LoginController','index']);
Flight::route('GET /home', ['HomeController','index']);
Flight::route('GET /logout', ['LogoutController','index']);
Flight::route('GET /@ecode:[0-9]{3}', ['ErrorController','index']);
Flight::route('GET /account', ['AccountInfoController','index']);
Flight::route('GET /directions', ['DirectionsController','index']);
Flight::route('GET /search', ['SearchController','index']);

Flight::route('GET /timetable', ['TimetableController','index']);
Flight::route('GET /timetable/edit', ['TimetableController','edit']);
Flight::route('POST /timetable/update', ['TimetableController','update']);

Flight::route('GET /timetable/lessons', ['TimetableLessonsController', 'index']);
Flight::route('POST /timetable/lessons/create', ['TimetableLessonsController', 'create']);
Flight::route('POST /timetable/lessons/delete', ['TimetableLessonsController', 'delete']);

Flight::route('GET /admin', ['AdminController','index']);
Flight::route('POST /admin/@submit', ['AdminController','create']);

Flight::route('POST /login', ['LoginController','auth']);

// API
//Flight::route('GET /api/timetable', ['apiTimetableController', 'read'])