<?php

function checkUserExits($con,$email,$mobile)
{
   $result = $con->query("SELECT * FROM users WHERE email = '$email' or mobile = '$mobile' ");
   return $result;
}

// DRY

function insertUser($con,$name,$email,$mobile,$password)
{
        $status = $con->query("INSERT INTO users (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')");
        return $status;
}

function redirect($name)
{
        header("Location:".$name);
        exit;
}