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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background: #C5E1A5;
        }

        form {
            width: 60%;
            margin: 60px auto;
            background: #efefef;
            padding: 60px 120px 80px 120px;
            text-align: center;
            -webkit-box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            position: relative;
            margin: 40px 0px;
        }

        .label-txt {
            position: absolute;
            top: -1.6em;
            padding: 10px;
            font-family: sans-serif;
            font-size: .8em;
            letter-spacing: 1px;
            color: rgb(120, 120, 120);
            transition: ease .3s;
        }

        .input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            outline: none;
        }

        .line-box {
            position: relative;
            width: 100%;
            height: 2px;
            background: #BCBCBC;
        }

        .line {
            position: absolute;
            width: 0%;
            height: 2px;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            background: #8BC34A;
            transition: ease .6s;
        }

        .input:focus+.line-box .line {
            width: 100%;
        }

        .label-active {
            top: -3em;
        }

        button {
            display: inline-block;
            padding: 12px 24px;
            background: rgb(220, 220, 220);
            font-weight: bold;
            color: rgb(120, 120, 120);
            border: none;
            outline: none;
            border-radius: 3px;
            cursor: pointer;
            transition: ease .3s;
        }

        button:hover {
            background: #8BC34A;
            color: #ffffff;
        }
    </style>

</head>

<body>
    <div class="container">
        <form action="handle_register.php" method="POST" onsubmit="return formsubmit()">
            <?php

            if (isset($_SESSION['successAlert']) == true) {
                echo "<div class='alert alert-success' role='alert'>" . $_SESSION['successAlert'] . "</div>";
                unset($_SESSION['successAlert']);
            }
            if (isset($_SESSION['failedAlert']) == true) {
                echo "<div class='alert alert-warning' role='alert'>" . $_SESSION['failedAlert'] . "</div";
                unset($_SESSION['failedAlert']);
            }
            if (isset($_SESSION['alreadyExist']) == true) {
                echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['alreadyExist'] . "</div>";
                unset($_SESSION['alreadyExist']);
            }

            ?>
            <label>
                <p class="label-txt">ENTER YOUR EMAIL</p>
                <input type="text" name="email" id="myemail" class="input">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label>
            <label>
                <p class="label-txt">ENTER YOUR NAME</p>
                <input type="text" name="name" id="myname" class="input">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label>
            <label>
                <p class="label-txt">ENTER YOUR PASSWORD</p>
                <input type="text" name="password" id="mypassword" class="input">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label>
            <button type="submit">submit</button>
        </form>
    </div>


    <script>
        function formsubmit() {
            var myemail = document.getElementById("myemail");
            var myname = document.getElementById("myname");
            var mypassword = document.getElementById("mypassword");
            var allinp = document.querySelectorAll(".input");
            // for (let i = 0; i <= allinp.length; i++) {
            //     if (allinp[i].value == "") {
            //         alert("Please Fill Out Blank Fields");
            //         return false;
            //     }
            // }
            if (myemail.value == "") {
                alert("Please Enter Your Email");
                return false;
            }
            if (myname.value == "") {
                alert("Please Enter Your Name");
                return false;
            }
            if (mypassword.value == "") {
                alert("Please Enter Your Password");
                return false;
            }
        }

        $(document).ready(function() {

            $('.input').focus(function() {
                $(this).parent().find(".label-txt").addClass('label-active');
            });

            $(".input").focusout(function() {
                if ($(this).val() == '') {
                    $(this).parent().find(".label-txt").removeClass('label-active');
                };
            });

        });
    </script>
</body>

</html>