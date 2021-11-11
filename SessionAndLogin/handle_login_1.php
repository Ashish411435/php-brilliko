<?php
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];

$defaultUser = "Ashish";
$defaultpassword = "12345";

if($userid == $defaultUser && $password == $defaultpassword)
{
    $_SESSION['userid'] = $userid;
    header("Location:welcome_1.php");
    exit;
}
else
{
    header("Location:login_1.php");
    exit;
}