<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <!-- LOGIN -->
      <div class="col-md-6">
        <form action="handle_login.php" method="post">
          <h3>LOGIN</h3>
          <div class="form-group">
            <label for="">Enter Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Enter Password</label>
            <input type="text" name="password" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-success">LOGIN</button>
          </div>
        </form>
      </div>
      <!-- Register -->
      <div class="col-md-6">
        <?php

        if (isset($_SESSION['msg'])  == true) {
          echo "<div class='alert alert-danger'> " . $_SESSION['msg'] . "</div>";
          unset($_SESSION['msg']);
        }

        if (isset($_SESSION['sucmsg'])  == true) {
          echo "<div class='alert alert-success'> " . $_SESSION['sucmsg'] . "</div>";
          unset($_SESSION['sucmsg']);
        }

        ?>
        <form action="handle_register.php" method="post">
          <h3>Register</h3>
          <div class="form-group">
            <label for="">Enter Name</label>
            <input type="text" name="name" required class="form-control">
          </div>
          <div class="form-group">
            <label for="">Enter Mobile</label>
            <input type="text" name="mobile" required class="form-control">
          </div>
          <div class="form-group">
            <label for="">Enter Email</label>
            <input type="text" name="email" required class="form-control">
          </div>
          <div class="form-group">
            <label for="">Enter Password</label>
            <input type="text" name="password" required class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-success">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>