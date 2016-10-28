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