<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Certificate</title>
</head>
<body>
    <div class="container">

    <?php
    if(isset($_SESSION['invalidMsg']) == true)
    {
        echo $_SESSION['invalidMsg'];
        unset($_SESSION['invalidMsg']);
    }
    ?>
        <form action="login_handle.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Mobile : </label>
                <input type="text" name="mobile" required placeholder="Enter Your Mobile Number" id="">
            </div>
            <br>
            <div>
                <label for="">D.O.B : </label>
                <input type="text" name="dob" required placeholder="Enter Your D.O.B">
            </div>
            <br>
            <div>
                <button>Track Certificate</button>
            </div>

        </form>
    </div>
</body>
</html>