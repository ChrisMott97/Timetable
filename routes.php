<?php
Flight::route('GET /', [$index,'index']);
Flight::route('GET /login', [$login,'index']);
Flight::route('GET /home', [$home,'index']);
Flight::route('GET /logout', [$logout,'index']);
Flight::route('GET /@ecode:[0-9]{3}', [$error,'index']);
Flight::route('GET /account', [$account,'index']);
Flight::route('GET /directions', [$directions,'index']);
Flight::route('GET /search', [$search,'index']);

Flight::route('GET /timetable', [$timetable,'index']);
Flight::route('GET /timetable/edit', [$timetable,'edit']);
Flight::route('POST /timetable/update', [$timetable,'update']);

Flight::route('GET /timetable/lessons', [$timetable_lessons, 'index']);
Flight::route('POST /timetable/lessons/create', [$timetable_lessons, 'create']);
Flight::route('POST /timetable/lessons/delete', [$timetable_lessons, 'delete']);

Flight::route('GET /admin', [$admin,'index']);
Flight::route('POST /admin/@submit', array($admin,'create'));

Flight::route('POST /login', array($login,'auth'));
