<?php
require_once 'db.php';
$id = $_GET['id'];
$status = $con->query("DELETE FROM students WHERE id = $id");
if($status == 1){
    header("Location:index.php");
    exit;
}
else
{
    echo $con->error;
}