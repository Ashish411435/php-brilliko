<?php
session_start();

require_once("track_certificate_db.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];

$certificate =$_FILES['certificate_image'];
$tmp_name = $certificate['tmp_name'];
$path = "uploaded_certificates/" . time() . $certificate['name'];
move_uploaded_file($tmp_name, $path);


// Insert

function insertCertificate($con, $firstname, $lastname, $dob, $mobile, $certificate)
{
    $status = $con->query("INSERT INTO proofs (firstname, lastname, dob, mobile, certificate) VALUES('$firstname', '$lastname', '$dob', '$mobile', '$certificate')");
    return $status;

}
$status = insertCertificate($con, $firstname, $lastname, $dob, $mobile, $path);
if($status == 1)
{
    $_SESSION['succMsg'] = "Successfully Registered.";
    header("location:register_certificate.php");
    exit;
}
else
{
    echo $con->error;
}
?>

