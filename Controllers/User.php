<?php

// UPDATE USER
$user_id = $_GET['update'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $result = $User->updateUser($_POST,$user_id);
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
        $User->updateUser($result,$user_id);
    }

    header("location:./index.php");
}


