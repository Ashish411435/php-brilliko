<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>

    </style>

</head>

<body>
    <section class="vh-100" style="background-color: #2779e2;">
        <div class="container h6-100">
            <div class="row d-flex justify-content-center align-items-center h6-100">
                <div class="col-xl-9">

                    <h1 class="text-white mb-4">Apply for a job</h1>

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <?php
                            if(isset($_SESSION['invalidCred']) == true)
                            {
                                echo "<div class='alert alert-danger'>" . $_SESSION['invalidCred'] . "</div>";
                                unset($_SESSION['invalidCred']);
                            }
                            ?>

                            <form action="handle_login.php" method="post" enctype="multipart/form-data">

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Email address : </h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="email" name="email" required placeholder="Enter Your Registered Email" class="form-control form-control-lg" placeholder="example@example.com" />

                                    </div>
                                </div>
                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Password : </h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="password" required placeholder="Enter Password" class="form-control form-control-lg" placeholder="example@example.com" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>

                                
                            </form>
                        </div>
                        <div class="px-5 py-4">
                            <h6>I haven't registered yet. </h6>
                            <a href="register.php">
                                <button class="btn btn-success btn-lg">Register</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>