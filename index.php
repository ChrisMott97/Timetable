<?php

require('flight/Flight.php');
require('partials/setup.php');

Flight::route('GET /', array('IndexController','index'));
Flight::route('GET /login', array('LoginController','index'));

Flight::route('POST /login', array('LoginController','auth'));

Flight::start();
