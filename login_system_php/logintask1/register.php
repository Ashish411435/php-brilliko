<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .vh-100 {
            height: 100% !important;

        }

        .h-100 {
            height: 100% !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="vh-100 gradient-custom">

            <div class="mt-4 pt-2">
                <a href="login.php"><input class="btn btn-primary btn-lg" type="button" value="Login" /> </a>
            </div>

            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                                <?php
                                if (isset($_SESSION['succMsg']) == true) {
                                    echo "<div class='alert alert-success'>" . $_SESSION['succMsg'] . "</div>";
                                    unset($_SESSION['succMsg']);
                                }

                                if (isset($_SESSION['alreadyExist']) == true) {
                                    echo "<div class='alert alert-danger'>" . $_SESSION['alreadyExist'] . "</div>";
                                    unset($_SESSION['alreadyExist']);
                                }

                                ?>

                                <form action="handle_register.php" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md-6 mb-4">


                                            <div class="form-outline">
                                                <label class="form-label" for="firstName">First Name :</label>
                                                <input type="text" id="firstName" name="firstName" placeholder="First Name" required class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="lastName">Last Name :</label>
                                                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline datepicker w-100">
                                                <label for="birthdayDate" class="form-label">Birthday : </label>
                                                <input type="text" name="dob" placeholder="D.O.B" required class="form-control form-control-lg" id="birthdayDate" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <h6 class="mb-2 pb-1">Gender :</h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" required id="femaleGender" value="Female" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" required id="maleGender" value="Male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" required id="otherGender" value="Other" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="emailAddress">Email :</label>
                                                <input type="email" name="email" placeholder="Enter Your Email" required id="emailAddress" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="phoneNumber">Phone Number :</label>
                                                <input type="tel" name="mobile" placeholder="Enter Your Phone No." required id="phoneNumber" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="uploadcertificate">Upload Certificate :</label>
                                                <input type="file" name="certificate_image" required id="uploadcertificate" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Register" />
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>