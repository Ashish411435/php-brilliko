<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration And Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Registration -->
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
                <form action="handle_registerForm.php" method="post" enctype="multipart/form-data">
                    <h3>Register</h3>
                    <div class="log-reg-form">
                        <label for="">Full Name : </label>
                        <input type="text" name="name" required placeholder="Enter Full Name" class="form-control">
                    </div>
                    <div class="log-reg-form">
                        <label for="">Mobile : </label>
                        <input type="text" name="mobile" required placeholder="Enter Mobile Number" class="form-control">
                    </div>
                    <div class="log-reg-form">
                        <label for="">Email : </label>
                        <input type="text" name="email" required placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="log-reg-form">
                        <label for="">Password : </label>
                        <input type="text" name="password" required placeholder="Enter Password" class="form-control">
                    </div>
                    <br>
                    <div class="log-reg-form">
                        <label for="">Upload Image : </label>
                        <input type="file" name="image" id="">
                    </div>
                    <div class="log-reg-form">
                        <button class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>

            <!-- Login -->
            <div class="col-md-6">
                
                <?php
                    if(isset($_SESSION['invalidMsg']) == true)
                    {
                        echo "<div class='alert alert-danger'>" . $_SESSION['invalidMsg'] . "</div";
                        unset($_SESSION['invalidMsg']);
                    }
                ?>

                <form action="handle_loginForm.php" method="post">
                    <h3>Login In</h3>
                    <div class="log-reg-form">
                        <label for="">Email : </label>
                        <input type="text" name="email" required placeholder="User Name" class="form-control">
                    </div>
                    <div class="log-reg-form">
                        <label for="">Password : </label>
                        <input type="text" name="password" required placeholder="Password" class="form-control">
                    </div>
                    <br>
                    <div class="log-reg-form">
                        <button class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
