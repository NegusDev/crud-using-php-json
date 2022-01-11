<?php
require("Config.php");
require("Controllers/User.php");

$user_id = $_GET['update'];

$Views->header();
    if (!isset($user_id)) {
        include("Views/Templates/404.php");
        exit;
    }
    $user = $User->getUserById($user_id);

    // IF USER EXISTS BUT NOT FOUND
    if (!$user) {
        include("Views/Templates/404.php");
        exit;
    }
include('Views/Templates/_update.php');
$Views->footer();