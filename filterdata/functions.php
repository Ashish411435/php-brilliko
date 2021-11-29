<?php
$con = new mysqli("localhost", "root", "", "bcm");
// gender
// city
// where gender = $gender and city = $city
// where gender =$gender
// where city =$city


$query = "SELECT * FROM students";
$subquery = "";

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    if ($gender != null) {
        $subquery = $subquery . " WHERE gender = '$gender' ";
    }
}

// where gender = $gender 
if (isset($_GET['city'])) {
    $city = $_GET['city'];
    
    //  where gender = $gender AND
    if ($city != null) {
        $prefix = "";

        if ($subquery != "") {
            $subquery = $subquery . " AND ";
        } else {
            $subquery = $subquery . " WHERE ";
        }
        $subquery = $subquery . " city = '$city'";
    }
    //  city = '$city'
}

$query = $query . " " . $subquery;

$results = $con->query($query);

if ($results == null) {
    echo $query;
    echo $con->error;
    exit;
}
