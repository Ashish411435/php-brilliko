<?php
session_start();

require_once("db.php");
require_once("helper/function.php");

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

/**
    TO DO: Here we check if mobile or email has already exists in database
*/

$result = checkUserExits($con,$email,$mobile);
if($result->num_rows > 0){
    $_SESSION["msg"] = "Email or Mobile Already Been Taken.";
    redirect("index.php");
 }


$status = insertUser($con,$name,$email,$mobile,$password);
if($status == 1){
    $_SESSION["sucmsg"] = "Successfully Registered";
    redirect("index.php");
}
else
{
    echo $con->error;
}