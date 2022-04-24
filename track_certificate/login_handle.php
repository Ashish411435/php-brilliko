<?php

session_start();

require_once("track_certificate_db.php");

$mobile = $_POST['mobile'];
$dob = $_POST['dob'];


// Login

function invalidCertificate($con, $mobile, $dob)
{
    $query = "SELECT * FROM proofs WHERE mobile = '$mobile' AND dob = '$dob' ";
    $status = $con->query($query);
    return $status;
}

$status = invalidCertificate($con, $mobile, $dob);

if($status->num_rows == 1 )
{
    $_SESSION['mobile'] = $mobile;
    header("location:hello.php");
    exit;
}
else
{
    $_SESSION['invalidMsg'] = "Invalid Username or Password.";
    header("location:login_certificate.php");
    exit;
}

?>