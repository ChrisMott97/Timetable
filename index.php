<?php

require('flight/Flight.php');
require('partials/setup.php');

Flight::route('GET /', array($index,'index'));
Flight::route('GET /login', array($login,'index'));

Flight::route('POST /login', array($login,'auth'));

Flight::start();
