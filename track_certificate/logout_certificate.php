<?php
session_start();

unset($_SESSION['mobile']);

header("location:login_certificate.php");