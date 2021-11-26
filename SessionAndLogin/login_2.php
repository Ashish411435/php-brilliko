<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="handle_login_2.php" method="POST">
            <div>
                <label for="">Username : </label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <br>
            <div>
                <label for="">Password : </label>
                <input type="text" name="password" placeholder="Password" id="">
            </div>
            <br>
            <div>
                <button class="btn btn-success btn-sm">Login</button>
            </div>
        </form>
    </div>
</body>
</html>