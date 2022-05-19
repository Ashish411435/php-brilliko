<?php
$password = "ashish@12345";
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
// echo $hashed_password;
echo password_verify($password,'$2y$10$AVaEUkvDwxrbGKMJLFuSCOieT5FZkk6WyeEvgeB8x1ocnYxrGMXfC');