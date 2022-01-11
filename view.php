<?php
require("Config.php");

$user_id = $_GET['view'];

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
// echo '<pre>';
// var_dump($user);
// echo '</pre>';
include('Views/Templates/_view.php');
$Views->footer();