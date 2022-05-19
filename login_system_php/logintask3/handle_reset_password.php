<?php
session_start();
require("db_connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth   = true;

    //Enable SMTP authentication
    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'ashish32623@gmail.com';
    $mail->Password   = '@$#i$#411435';

    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('ashish32623@gmail.com', $get_name);
    $mail->addAddress($get_email);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Reset Password Link';

    $email_template = "
     <h2>Hello,</h2>
     <h3>We received a password reset request for your account.</h3>
     <br/>
     <a href='http://localhost/login_system_php/logintask3/password_change.php?token=$token&email=$get_email'>Click here to reset your password</a>";

    $mail->Body = $email_template;

    $mail->send();
}

if (isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT `email` FROM `register_practice3` WHERE `email` = '$email' LIMIT 1";
    $result = mysqli_query($con, $check_email);
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
        $row = mysqli_fetch_assoc($result);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE `register_practice3` SET `token` = '$token' WHERE `email` = '$get_email' LIMIT 1";
        $update_token_result = mysqli_query($con, $update_token);
        if ($update_token_result) {
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['statusAlert'] = "Email has been sent to, $email";
            header("Location: reset_password.php");
            exit(0);
        } else {
            $_SESSION['statusAlert'] = "Something Went wrong #tok";
            header("Location: reset_password.php");
            exit(0);
        }
    } else {
        $_SESSION['statusAlert'] = "Email Not Found";
        header("Location: reset_password.php");
        exit(0);
    }
}
