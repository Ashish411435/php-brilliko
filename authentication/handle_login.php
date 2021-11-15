<?php
session_start();
require_once("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$status = $con->query("SELECT * FROM users WHERE email = '$email' AND password = '$password' ");

if($status->num_rows == 1){
    $_SESSION['user'] = $email;
    header("Location:welcome.php");
    exit;
}
else
{
    header("Location:index.php");
    exit;
}