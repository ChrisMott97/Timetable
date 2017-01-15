<?php
require __DIR__ . '/vendor/autoload.php';

if(file_exists(__DIR__.'/.env')){
	$dotenv = new Dotenv\Dotenv(__DIR__);
	$dotenv->load();
}

require('partials/setup.php');

require('routes.php');

Flight::start();
