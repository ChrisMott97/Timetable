<?php
Flight::route('GET /', array($index,'index'));

Flight::route('GET /login', array($login,'index'));
Flight::route('POST /login', array($login,'auth'));

Flight::route('GET /home', array($home,'index'));

Flight::route('GET /admin', array($admin,'index'));

Flight::route('GET /logout', array($logout,'index'));