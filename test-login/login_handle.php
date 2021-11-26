<?php

require_once("db_connectivity.php");

$username = $_POST['username'];
$password = $_POST['password'];

function loginUser($con, $username, $password)
{
    $query = "SELECT * FROM practicelogin WHERE username = '$username' AND password = '$password' ";
    $status = $con->query($query);
    return $status;
}
$status = loginUser($con, $username, $password);

// exit;
if($status->num_rows == 1)
{
    header("location:hello.php");
    exit;

}
else
{
    header("location:login.php");
    exit;
}

?>