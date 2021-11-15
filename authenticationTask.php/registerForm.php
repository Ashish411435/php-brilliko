<?php
session_start();

require_once("function.php");
$logReg = new mysqli("localhost", "root", "", "auth2");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];


/**
    Here we'll check if user's email id or mobile number already exist or not. 
*/

$result = CheckUserExist($logReg, $email, $mobile);
if($result->num_rows > 0)
{
    $_SESSION['alreadyMsg'] = "Email or Mobile had already been taken.";
    redirect("login_registration.php");
}


$status = insertUser($logReg, $name, $mobile, $email, $password);
if($status > 0)
{
    $_SESSION['succMsg'] = "Successfully Registered.";
    redirect("login_registration.php");
}
else{
    echo $logReg->error;
}
