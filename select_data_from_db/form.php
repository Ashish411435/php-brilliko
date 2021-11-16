<?php

require_once("formDataBase.php");

$query = ("SELECT * FROM form");
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
                <th>Email</th>
                <th>Mobile</th>
                <th>Course</th>
                <th>Centre</th>
                <th></th>
            </tr>

            <?php
            foreach($result as $finalResult)
            { ?>
            <tr>
                <td> <?php echo $finalResult['id']  ?> </td>
                <td> <?php echo $finalResult['name']  ?> </td>
                <td> <?php echo $finalResult['email']  ?> </td>
                <td> <?php echo $finalResult['mobile'] ?>  </td>
                <td> <?php echo $finalResult['course'] ?>  </td>
                <td> <?php echo $finalResult['centre'] ?>  </td>
                <td> <a href="formDelete.php"><button class="btn btn-danger">Delete</button></a>
            </tr>
            <?php
            } ?>

        </table>
    </div>
</body>
</html>
