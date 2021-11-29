<?php
$password = "hello@123";
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
// echo $hashed_password;
echo password_verify($password,'$2y$10$QtN.LOBr9U1GVIwAyJmrT.ARZE8zx7f60wKTBbsH2JcN0JyRnoYwO');