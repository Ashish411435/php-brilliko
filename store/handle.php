<?php
$name = $_POST['name'];
$city = $_POST['city'];
$con = new mysqli("localhost","root","","bcm");
$status = $con->query("INSERT INTO students (name,city) VALUES('$name','$city')");
echo $status;
// if($status == 1){
//     header("Location:index.php");
//     exit;
// }
// else
// {
//     echo $con->error;
// }