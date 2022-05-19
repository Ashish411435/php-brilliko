<?php

session_start();
require("db_connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql_query = "SELECT * FROM `register_practice3` WHERE `email` = '$username' AND `password` = '$password'";
    $query_result = mysqli_query($con, $sql_query);

    $row_count = mysqli_num_rows($query_result);
    if($row_count > 0)
    {
        header("location: welcome.php");
        exit;
    }
    else{
        $_SESSION['invalidCred'] = "Invalid Credentials";
        header("location: login.php");
        exit;
    }


}