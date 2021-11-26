<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div>
            <h3>Login</h3>
        </div>
        <form action="login_handle.php" method="post" enctype="multipart/form-data">
            <br>
            <div>
                <label for="">Username : </label>
                <input type="text" name="username" required placeholder="Enter Your Username" id="">
            </div>
            <br>
            <div>
                <label for="">Password : </label>
                <input type="text" name="password" required placeholder="Enter Your Password" id="">
            </div>
            <br>
            <div>
                <button>Login</button>
            </div>

        </form>
    </div>
</body>
</html>