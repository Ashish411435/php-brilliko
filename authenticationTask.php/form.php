<?php

require_once("formDataBase.php");

$query = "SELECT * FROM users2";
$result = $vamp->query($query);

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
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Image</th>
            </tr>
            <?php foreach ($result as $finalResult) { ?>
                <tr>
                    <td> <?php echo $finalResult['id'] ?> </td>
                    <td> <?php echo $finalResult['name'] ?> </td>
                    <td> <?php echo $finalResult['mobile'] ?> </td>
                    <td> <?php echo $finalResult['email'] ?> </td>
                    <td> <?= $finalResult['password'] ?> </td>
                    <td> <a href="edit.php?id=<?php echo $finalResult['id'] ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
                    <td> <a href="confirm.php?id=<?php echo $finalResult['id'] ?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                    <td> 
                        <img src="<?= $finalResult['image'] ?> " style="width:50px" >
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div><a href="login_registration.php"><button class="btn btn-success">Register</button></a></div>  
    </div>
</body>

</html>