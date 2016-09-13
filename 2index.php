<?php
require('partials/setup.php');
$f3 = require('./lib/base.php');
$f3->route('GET /',
    function() {
        require('views/index.views.php');
    }
);
$f3->run();
