<?php

session_start();

require("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $token = md5(rand());

    /* Start To Check Existence  */
    $sql_query = "SELECT * FROM `register_practice3` WHERE `email` = '$email'";
    $query_result = mysqli_query($con, $sql_query);
    $row_count = mysqli_num_rows($query_result);

    if ($row_count > 0) {
        $_SESSION['alreadyExist'] = "Email has already been taken";
        header("location: register.php");
        exit;
        /* Start To Check Existence  */
    } else {
        /* Start To Insert The Values */
        $sql_query = "INSERT INTO `register_practice3` (`name`, `email`, `password`, `token`) VALUES ('$name', '$email', '$password', '$token')";

        $query_result = mysqli_query($con, $sql_query);
        if ($query_result) {
            $_SESSION['successAlert'] = "Successfully Registered";
            header("location: register.php");
            exit;

        } else {
            $_SESSION['failedAlert'] = "Something Went Wrong...!";
            header("location: register.php");
            exit;

        }
        /* Start To Insert The Values */
    }
}



// $email = $_POST['email'];
// $name = $_POST['name'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// /* Start To Check Existence  */
// function checkExistence($con, $email)
// {
//     $sql_query = "SELECT * FROM `register_practice3` WHERE `email` = '$email'";
//     $query_result = $con->query($sql_query);
//     return $query_result;
// }

// $query_result = checkExistence($con, $email);
// if ($query_result->num_rows > 0) {
//     $_SESSION['alreadyExist'] = "Email address has already been taken.";
//     header("location: register.php");
//     exit;
// }
// /* End To Check Existence  */


// /* To Insert Values */
// function insertData($con, $name, $email, $password)
// {
//     $sql_query = "INSERT INTO `register_practice3` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
//     $query_result = $con->query($sql_query);
//     return $query_result;
// }
// $query_result = insertData($con, $name, $email, $password);
// if ($query_result) {
//     $_SESSION['successAlert'] = "Successfully Registered";
//     header("location: register.php");
//     exit;
// } else {
//     $_SESSION['failedAlert'] = "Something Went Wrong...!";
//     header("location: register.php");
//     exit;
// }
