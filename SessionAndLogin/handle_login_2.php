<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$defaultUser = "admin";
$defaultPassword = "123456"
if($username==$defaultUser && $password==$defaultPassword)
{
    $_SESSION['username'] = $username;
    header("welcome_2.php");
    exit;
}

?>