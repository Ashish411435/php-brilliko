<?php
require_once("formDataBase.php");

$id = $_GET['id'];
$query = "DELETE FROM users2 WHERE  id = $id";
$status = $vamp->query($query);
if($status == 1)
{
    header("location:form.php");
    exit;
}
else
{
    echo $vamp->error;
}