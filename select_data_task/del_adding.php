<?php

require_once("adding_db.php");

$id = $_GET['id'];
$query = "DELETE FROM products WHERE id = $id ";
$status = $serv->query($query);
if($status == 1)
{
    header("location:main.php");
    exit;
}
else
{
    echo $serv->error;
}