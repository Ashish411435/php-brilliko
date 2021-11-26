<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$course = $_POST['course'];
$centre = $_POST['centre'];
// $objectName = new mysqli("Server Name", "User ID", "Password", "Database Name" )
$formClass = new mysqli("localhost", "root", "", "formtask" );
$check = $formClass -> query("INSERT INTO form (name, email, mobile, course, centre) VALUES('$name','$email', '$mobile', '$course', '$centre')");
echo $check;