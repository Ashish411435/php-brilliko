<?php

require_once("formDataBase.php");

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$id = $_POST['id'];
$query = "UPDATE users2 SET name = '$name' , email = '$email', mobile = '$mobile' WHERE id = $id";
$status = $vamp->query($query);
if($status != null){
    header("location:form.php");
    exit;
}
else
{
    echo $vamp->error;
}

