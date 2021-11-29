<?php

$con = new mysqli("localhost", "root", "", "products");

$query = "SELECT * FROM items";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    if ($category != null) {
        $query = $query. " WHERE category = '$category'";
    }
}

else if (isset($_GET['segment'])) {
    $segment = $_GET['segment'];
    if ($segment != null) {
        $query = $query. " WHERE segment = '$segment'";
    }
}

else if (isset($_GET['rating'])) {
    $rating = $_GET['rating'];
    if ($rating != null) {
        $query = $query. " WHERE rating = '$rating'";
    }
}




$result = $con->query($query);
if($result == null)
{
    echo $query;
    echo $con->error;
    exit;
}


?>