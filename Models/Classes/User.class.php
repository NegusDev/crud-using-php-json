<?php

namespace classes;

class User {

    public function getAllUsers() {
        // getting data from json file 
        // "true" returns an assoc array
        $users = json_decode(file_get_contents(BASE_DIR.'/Models/users.json'),true);
        return $users ?? [];
        // echo '<pre>';
        // var_dump($user);
        // echo '</pre>';
    }

    public function ViewUsers(array $users):string {
        $html = '<tbody id="tbody">';
        if (empty($users)) {
            $html .= '
                <tr>
                    <td colspan="12" class="text-center">No users added yet</td>
                </tr>
            ';
        }
        else {
            foreach ($users as $user) {
                $html .= '
                    <tr>
                        <td>'.$user['name'].'</td>
                        <td>'.$user['username'].'</td>
                        <td>'.$user['email'].'</td>
                        <td>'.$user['phone'].'</td>
                        <td>'.$user['website'].'</td>
                        <td >
                            <a href="view.php?view=' . $user['user_id'] . '" class="btn btn-sm btn-outline-dark">View</a> 
                            <a href="update.php?update=' . $user['user_id'] . '" class="btn btn-sm btn-outline-success">Update</a>
                            <form method="post" action="delete.php" >
                                <input type="hidden" name="user_id" value="'.$user['user_id'].'">
                                <button  class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                ';
            }
            $html .= '</tbody>';
        }
        return $html;
    }

    public function getUserById($user_id) {
        $users = $this->getAllUsers();
        foreach ($users as $user) {
            if ($user['user_id'] == $user_id) {
                return $user;
            }
        }
        return null;
    }

    public function createUser($data) {

        $users = $this->getAllUsers();

        $data['user_id'] = rand(100000,20000);

        $users[] = $data;

        file_put_contents(BASE_DIR.'/Models/users.json',json_encode($users));


        return $data;
    }

    public function updateUser($data,$user_id) {

        $update = [];

        $users = $this->getAllUsers();

        foreach ($users as $i => $user) {

            if ($user['user_id'] == $user_id) {

                $users[$i] = $update = array_merge($user, $data);

            }
        }
        
        file_put_contents(BASE_DIR.'/Models/users.json',json_encode($users));

        return $update;
    }

    public function deleteUser($user_id) {
        $users = $this->getAllUsers();
        foreach ($users as $i =>$user) {
           if ($user['user_id'] == $user_id) {
               array_splice($users, $i,1);
           }
        }
        file_put_contents(BASE_DIR.'/Models/users.json',json_encode($users));
    }

    public function putJson(){
        file_put_contents(BASE_DIR.'/Models/users.json',json_encode($users));
    }

    // public function uploadImage($file,$user) {
    //     // check if file dir exist
    //     if (!is_dir(BASE_DIR."/users/images")) {
    //         mkdir(BASE_DIR."/users/images");
    //     }
    //     // GET THE FILE EXT FROM THE FILENAME
    //     $fileName = $_FILES['image']['name'];
    //     // SEARCH FOR THE DOT IN THE FILENAME
    //     $dotPosition = strpos($fileName,".");
    //     // TAKE THE SUBSTR FROM THE $dotPosition TILL THE END OF STR
    //     $ext = substr($fileName,$dotPosition + 1);
    //     move_uploaded_file($_FILES['image']['tmp_name'],BASE_DIR."/users/images/{$user['user_id']}.$ext");

    //     $user['extension'] = $ext;
    //     $this->updateUser($user,$user['user_id']);
    // }
}