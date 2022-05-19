<?php
session_start();

require_once("db_connect.php");

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$dob = $_POST['dob'];
$gender =$_POST['gender'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];   


$certificate =$_FILES['certificate_image'];
$tmp_name = $certificate['tmp_name'];
$path = "web_images/" . time() . $certificate['name'];
move_uploaded_file($tmp_name, $path);

// Check User Exist
function checkExist($con, $email, $mobile)
{
    $query = "SELECT * FROM proofs2 WHERE email = '$email' OR mobile = '$mobile' ";
    $result = $con->query($query);
    return $result;
}
$result = checkExist($con, $email, $mobile);

if($result->num_rows == 1)
{
    $_SESSION['alreadyExist'] = "Email Or Mobile Already Been Taken.";
    header("location:register.php");
    exit;
}

// Insert
function insertCertificate($con, $firstname, $lastname, $dob, $gender, $email, $mobile, $certificate)
{
    $status = $con->query("INSERT INTO proofs2 (firstName, lastName, dob, gender, email, mobile, certificate) VALUES('$firstname', '$lastname', '$dob', '$gender', '$email', '$mobile', '$certificate')");
    return $status;

}
$status = insertCertificate($con, $firstname, $lastname, $dob, $gender, $email, $mobile, $path);
echo $status;
if($status == 1)
{
    $_SESSION['succMsg'] = "Successfully Registered.";
    header("location:register.php");
    exit;
}
else
{
    echo $con->error;
}
?>

