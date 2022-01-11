<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$user_id = $_POST['user_id'];
$User->deleteUser($user_id);
header("location: index.php");