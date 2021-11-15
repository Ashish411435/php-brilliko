<?php

    session_start();
    if(isset($_SESSION['email']) == false)
    {
        header("location:login_registration.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome.php 2</title>
</head>
<body>
    <h4>Welcome <?php echo $_SESSION['email'] ?>  </h4>
    <a href="logout.php"> <button class="btn btn-success"> Log Out </button> </a>
</body>
</html>