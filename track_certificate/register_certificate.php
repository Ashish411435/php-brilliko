<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Certificate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="box-1">
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['alreadyMsg']) == true)
                {
                    echo "<div class='alert alert-danger'>" . $_SESSION['alreadyMsg'] . "</div>";
                    unset($_SESSION['alreadyMsg']);
                }

                if(isset($_SESSION['succMsg']) == true)
                {
                    echo "<div class='alert alert-success'>" . $_SESSION['succMsg'] . "</div>";
                    unset($_SESSION['succMsg']);
                }
                ?>
                <form action="register_handle.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">First Name : </label>
                        <input type="text" name="firstname" required id="">
                    </div>
                    <div class="form-group">
                        <label for="">Last Name : </label>
                        <input type="text" name="lastname" required id="">
                    </div>
                    <div class="form-group">
                        <label for="">D.O.B : </label>
                        <input type="text" name="dob" required id="">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile : </label>
                        <input type="text" name="mobile" required id="">
                    </div>
                    <div class="form-group">
                        <label for="">Upload Certificate : </label>
                        <input type="file" name="certificate_image" required id="">
                    </div>
                    <div class="form-group">
                        <a href=""><button class="btn btn-success btn-sm">Register</button></a>
                    </div>
                    
                </form>
                <div class="form-group">
                    <a href="login_certificate.php"><button class="btn btn-success btn-sm">Track Certificate</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>