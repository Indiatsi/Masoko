<?php

include './connection.php';
session_start();

if(isset($_POST['email'])){
    //Get the post data
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    //Check whether email exits
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_object();
    $hash = $row->password;

    //If we get a result
    if(mysqli_num_rows($result)===1) {
        //Check whether password is correct
        $verify = password_verify($pwd, $hash);

        if($verify){
            $_SESSION['user_id'] = $row->user_id;
            $_SESSION['email'] = $row->email;
            $_SESSION['first_name'] = $row->first_name;
            $_SESSION['last_name'] = $row->last_name;
            $_SESSION['county'] = $row->county;
            $_SESSION['user_type'] = $row->user_type;

            $user_type = $row->user_type;
            //Redirect to certain page
            if(isset($_SESSION['user_id'])){
                echo 'login-success';
                if($user_type == "Customer"){
                    header("location: ../home.php");
                }else if($user_type == "Vendor"){
                    header("location: ../owner-view-hostels.php");
                }
            }
        }
        else {
            echo 'invalid-pwd';
            exit();
        }
//            if(password_verify($pwd,)){
//                //Store session variables upon successful login
//                $_SESSION['user_id'] = $row->user_id;
//                $_SESSION['email'] = $row->email;
//                $_SESSION['first_name'] = $row->first_name;
//                $_SESSION['last_name'] = $row->last_name;
//                $_SESSION['county'] = $row->county;
//                $_SESSION['user_type'] = $row->user_type;
//
//                $user_type = $row->user_type;
//                //Redirect to certain page
//                if(isset($_SESSION['user_id'])){
//                    echo 'login-success';
//                    if($user_type == "Customer"){
//                        header("location: ../home.php");
//                    }else if($user_type == "Vendor"){
//                        header("location: ../owner-view-hostels.php");
//                    }
//                }
//
//            }else{
//                //return error message
//                echo 'invalid-pwd';
//                exit();
//            }


    }else{
        //return error message
        echo 'invalid-email';
        exit();
    }

    //if we don't get a reult




}