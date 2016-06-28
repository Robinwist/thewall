<?php
session_start();
require_once 'config/config.php';
require_once 'library/database.php';
include "main.php";

$action = (empty($_GET['action'])) ? '' : $_GET['action'];

switch ($action){

    case 'login':
        include "views/loginform.php";
        break;

    case 'logout':
        unset($_SESSION);
        session_destroy();
        include "views/loginform.php";

    case 'doLogin':
        $request_username = (empty($_POST['username'])) ? '' : $_POST['username'];
        $request_password = (empty($_POST['password'])) ? '' : $_POST['password'];

        if ($request_username != '' && $request_password != '')
        {
            $result = $mysqli->query("SELECT * FROM users
								WHERE username = '".$request_username."' AND password = '".$request_password."'");
            $user_match_count = $result->num_rows;

            if ($user_match_count == 1)
            {
                $user_row = $result->fetch_assoc();
//                var_dump($user_row);
                $_SESSION['username'] = $user_row['username'];
                $_SESSION['firstname'] = $user_row['firstname'];
                $_SESSION['password'] = $user_row['password'];
                $_SESSION['id'] = $user_row['id'];
                include "views/account.php";
            }
            else
            {
                echo '<h2>Please try again</h2>';
            }
        }
    break;

    case 'profile':
        include 'views/account.php';
        break;

    case 'edit':
        include 'views/edit.php';
        break;

    case 'register':
        include 'views/register.php';
        break;

    case 'uploadForm':
        include "views/uploadForm.php";
        break;

    case 'doUpload':
        $file = $_FILES['fileToUpload']['tmp_name'];
        $mime_type = mime_content_type($file);
        echo $mime_type;
//var_dump($_FILES);
        $destination = 'uploads/' . $_FILES['fileToUpload']['name'];
//move_uploaded_file($file, $destination);
        $img_types = array(
            "image/gif",
            "image/jpeg",
            "image/png",
            "image/jpg"
        );

        if (in_array($mime_type, $img_types) && (move_uploaded_file($file, $destination))) {
            $filename = $_FILES['fileToUpload']['name'];
            $imgOP = $_SESSION['firstname'];
            $query = "INSERT INTO img (name, username) VALUES ('$filename', '$imgOP')";
            $mysqli->query($query);
            echo "The file " . $file . " has been uploaded";
            echo '<br>';
            echo '<a href="?action=uploadForm">Go back</a>';
        } else {
            echo "The file you tried to upload was either too big, or an unsupported filetype. Please try again.";
            echo '<br>';
            echo '<a href="?action=uploadForm">Go back</a>';
        }

    break;

    case 'home':


    default:
        include "views/showImg.php";

}

