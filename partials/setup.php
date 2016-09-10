<?php
session_start();

require('models/query.class.php');
Flight::set('query', new Query());

require('controllers/index.controller.php');
require('controllers/login.controller.php');


