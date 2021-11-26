<?php
session_start();
if(isset($_SESSION['username']) == false)
{
    header("location:login_2.php");
    exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page 2</title>
</head>
<body>
    <div class="container">
        <h1>
            Welcome <?php $_SESSION['username'] ?>
        </h1>
    </div>
</body>
</html>