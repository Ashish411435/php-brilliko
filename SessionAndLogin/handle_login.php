<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$default_user = "admin";
$default_pwd = "12345";

if($username == $default_user && $password == $default_pwd)
{
     $_SESSION["username"] = $username;
     header("Location:welcome.php");
     exit;
}
else
{
     header("Location:login.php");
     exit;
}
