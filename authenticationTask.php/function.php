<?php

/*  Register    */

function CheckUserExist($logReg, $email, $mobile)
{
    $result = $logReg->query("SELECT * FROM users2 WHERE email = '$email' OR mobile = '$mobile' ");
    return $result;
}

function insertUser($logReg, $name, $mobile, $email, $password)
{
    $status = $logReg->query("INSERT INTO users2 (name, mobile, email, password) VALUES ( '$name', '$mobile', '$email', '$password' ) ");
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