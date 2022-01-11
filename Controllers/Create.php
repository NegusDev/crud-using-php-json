<?php

$errors = [
    "name" => '',
    "username" => '',
    "email" => '',
    "phone" => '',
    "website" => ''
];

$isValid = true;
// CREATE USER
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];

    if (!$name) {
        $isValid = false;
        $errors['name'] = "Name is Mandatory";
    }
    if (!$username && $username < 6 && $username > 16) {
        $isValid = false;
        $errors['username'] = "Username is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $isValid = false;
        $errors['email'] = "Valid email is required";
    }
    if (!filter_var($phone, FILTER_VALIDATE_INT)) {
        $isValid = false;
        $errors['phone'] = "This must be a valid phone number";
    }

    if ($isValid){
        if (isset($_FILES['image'])) {

            // check if file dir exist
            if (!is_dir(BASE_DIR."/users/images")) {
                mkdir(BASE_DIR."/users/images");
            }
            // GET THE FILE EXT FROM THE FILENAME
            $fileName = $_FILES['image']['name'];
            // SEARCH FOR THE DOT IN THE FILENAME
            $dotPosition = strpos($fileName,".");
            // TAKE THE SUBSTR FROM THE $dotPosition TILL THE END OF STR
            $ext = substr($fileName,$dotPosition + 1);
            move_uploaded_file($_FILES['image']['tmp_name'],BASE_DIR."/users/images/{$user_id}.$ext");

            $result['extension'] = $ext;
        }
        $result = $User->createUser($_POST);
    
        header("location:./index.php");
    }
}