<?php
session_start();
require_once("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$status = $con->query("SELECT * FROM users WHERE email = '$email'");

if($status == null){
    header("Location:index.php");
    exit;
}

$row = $status->fetch_assoc();

$strpwd = $row['password'];

if( password_verify($password,$strpwd) == 1){
    $_SESSION['user'] = $email;
    header("Location:welcome.php");
    exit;
}
else
{
    header("Location:index.php");
    exit;
}

// PHP BASIC [ var , constant , for , if]
// OOPS : Classes Interface
// Session
// Cookies
// Database - Mysql
// Composer Library
// Ajax (Ajax)
// Project 1 or Project 2
// Grocry

// mydb
// mydbaessh
// faV_?dMiahEh5vOt