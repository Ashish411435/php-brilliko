<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Things</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .check-status{
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_SESSION['alreadyExist']) == true)
        {
            echo $_SESSION['alreadyExist'];
            unset($_SESSION['alreadyExist']);
        }

        if(isset($_SESSION['successMsg']) == true)
        {
            echo $_SESSION['successMsg'];
            unset($_SESSION['successMsg']);
        }
        ?>
        <form action="handle_adding.php" method="POST" class="form-group" enctype="multipart/form-data" >
            <h3>Add New Product</h3>
            <div class="adding_form">
                <label for="">Image</label>
                <input type="file" name="image" id="">            
            </div>
            <br>
            <div class="adding_form">
                <label for="">Content</label>
                <input type="text" name="content" id="">
            </div>
            <br>
            <div class="adding_form">
                <label for="">Price</label>
                <input type="text" name="price" id="">
            </div>
            <div class="adding_form">
                <a href=""><button class="btn btn-success btn-sm">Add New Product</button></a>
            </div>

        </form>
        <div class="check-status">
            <button><a href="main.php">Check Status</a></button>
        </div>
    </div>
</body>
</html>

