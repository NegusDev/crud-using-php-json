<?php
require("Config.php");


$getUser =$User->getAllUsers();
$page['content'] =  $User->ViewUsers($getUser);

$Views->header();
include('Views/Templates/_users.php');
$Views->footer();

