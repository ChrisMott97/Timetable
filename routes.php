<?php
Flight::route('GET /', [$index,'index']);
Flight::route('GET /login', [$login,'index']);
Flight::route('GET /home', [$home,'index']);
Flight::route('GET /logout', [$logout,'index']);
Flight::route('GET /@ecode:[0-9]{3}', [$error,'index']);
Flight::route('GET /account', [$account,'index']);

Flight::route('GET /admin', [$admin,'index']);

Flight::route('POST /login', array($login,'auth'));
Flight::route('POST /admin/@submit', array($admin,'create'));