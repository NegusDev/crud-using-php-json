<?php

define('BASE_DIR', __DIR__);

spl_autoload_register(function($className) {
    include(BASE_DIR . '/Models/'.str_replace('\\',"/",$className).'.class.php'); 
    // echo "Autoload class:".$className.PHP_EOL;      
});


use classes\Views;
use classes\User;

$Views = new Views();
$User = new User();

$page = [];