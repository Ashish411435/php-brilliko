<?php
session_start();

require_once("db_connect.php");


$email = $_POST['email'];
$password = $_POST['password'];

function CheckCredentials($con, $email, $password)
{
    $query = "SELECT * FROM proofs3 WHERE email = '$email' AND password =  '$password' ";
    $result = $con->query($query);
    return $result; 
}
$result = CheckCredentials($con, $email, $password);
if($result->num_rows == 1 )
{
    $_SESSION['email'] = $email;
    header("location: welcome.php");
    exit;
}
else
{
    $_SESSION['invalidCred'] = "Email or Password Does Not Match.";
    header("location:login.php");
    exit;
}
