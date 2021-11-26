<?php
session_start();

require_once("function.php");
$logReg = new mysqli("localhost", "root", "", "auth2");

if(isset($_SESSION['email']) == true)
{
    header("location:welcome2.php");
    exit;
}


$email = $_POST['email'];
$password = $_POST['password'];


$status = invalidUser($logReg, $email, $password);
if($status->num_rows == 1)
{
    $_SESSION['email'] = $email;
    header("location:welcome2.php");
    exit;
}
else
{
    $_SESSION['invalidMsg'] = "Invalid Email or Password !";
    header("location:login_registration.php");
    exit;
}

?>
