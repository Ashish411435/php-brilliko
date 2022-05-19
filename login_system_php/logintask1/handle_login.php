<?php

session_start();

require_once("db_connect.php");
$name = $_POST['firstName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "SELECT * FROM proofs2 WHERE email = '$email'AND mobile = '$mobile' ";

$result = $con->query($query);

if($result->num_rows == 1)
{
    $_SESSION['email'] = $email;
    header("location: Welcome.php");
    exit;
}
else
{
    $_SESSION['invalidMsg'] = "Invalid Credentials.";
    header("location:login.php");
    exit;
}