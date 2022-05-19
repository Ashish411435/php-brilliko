<?php
session_start();

require_once("db_connect.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$description = $_POST['description'];

$cv = $_FILES['cv'];
$tmp_name = $cv['tmp_name'];
$newName = "web/" . time() . $cv['name'];
move_uploaded_file($tmp_name, $newName);


// Check Existence

function checkExistence($con, $email)
{
    $query = "SELECT * FROM proofs3 WHERE email = '$email' ";
    $status = $con->query($query);
    return $status;
}
$status = checkExistence($con, $email);

if($status->num_rows == 1)
{
    $_SESSION['invalidMsg'] = "Email has already been taken.";
    header("location:register.php");
    exit;
}


// Insert

function insertData($con, $fullname, $email, $password, $description, $cv)
{
    $query = "INSERT INTO proofs3 (fullname, email, password, description, cv) VALUES ('$fullname', '$email', '$password', '$description', '$cv') ";
    $result = $con->query($query);
    return $result;
}
$result = insertData($con, $fullname, $email, $password, $description, $newName);
if($result == 1)
{
    $_SESSION['succMsg'] = "Successfully Registered";
    header("location:register.php");
    exit;
}
else
{
    echo $con->error;
}


?>