<?php

/*  Register    */

function CheckUserExist($logReg, $email, $mobile)
{
    $result = $logReg->query("SELECT * FROM users2 WHERE email = '$email' OR mobile = '$mobile' ");
    return $result;
}

function insertUser($logReg, $name, $mobile, $email, $password,$image)
{
    $status = $logReg->query("INSERT INTO users2 (name, mobile, email, password,image) VALUES ( '$name', '$mobile', '$email', '$password' , '$image' ) ");
    return $status;
}

function redirect($name)
{
    header("Location:" . $name);
    exit;
}


/*  Login   */
function invalidUser($logReg, $email, $password)
{
    $status = $logReg->query("SELECT * FROM users2 WHERE email = '$email' AND password = '$password' ");
    return $status;
}