<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "test_login";


// Connection
$con = mysqli_connect($hostname, $username, $password, $db_name);

// To Check Connection
if($con == true) 
{
    // echo "Connection Successful";
}
else{
    echo $con->error;
}

?>