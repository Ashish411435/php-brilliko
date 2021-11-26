<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$city = $_POST['city'];

if(strlen($name) < 3 || strlen($name) > 10)
{
    header("location:index.php");
    exit;
}
else if($name != true)
{
    header("location:index.php");
    exit;
}
else
{
    echo $name;
    echo "<br>";
}

if($gender != true)
{
    header("location:index.php");
    exit;
}
else
{
    echo $gender;
    echo "<br>";
}
if(strlen($city) > 10)
{
    header("location:index.php");
    exit;
}
else if($city != true)
{
    header("location:index.php");
    exit;
}
else
{
    echo $city;
    echo "<br>";
}
