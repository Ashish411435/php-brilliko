<?php

require_once("adding_db.php");

$query = "SELECT * FROM products";
$result = $serv->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(106, 224, 224);
        }

        .box {
            display: flex;
            flex-flow: row;
            justify-content: space-between;
            width: 600px;
            margin: auto;
            /* padding: 10px; */

        }

        .image {
            flex: 2;
        }
        .image a{
            text-decoration: none;
        }

        .content {
            flex: 3;
        }
        .content a{
            text-decoration: none;
            color: black;
        }
        .content a:hover{
            cursor: pointer;
            color: blue;
        }
        .price {
            flex: 2;
            margin-top: 10px;
            position: relative;
            left: 35px;
        }
        .price a{
            text-decoration: none;
        }
        .content a:hover{
            cursor: pointer;
            color: blue;
        }

        .edit {
            margin-top: 10px;
            margin-left: 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            height: 100%;
        }

        .edit button {
            border: 2px solid black;
            border-radius: 5px;
            background: rgb(86, 177, 86);
            cursor: pointer;
            font-size: 15px;
            padding-left: 10px;
            padding-right: 10px;

        }
        .edit button:hover{
            color: red;
        }

        .delete {
            margin-top: 10px;
            margin-left: 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            height: 100%;
        }

        .delete button {
            border: 2px solid rgb(221, 109, 109);
            border-radius: 5px;
            background: rgb(221, 109, 109);
            cursor: pointer;
            font-size: 15px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .add {

            position: absolute;
            right: 30px;
        }

        .add button {
            border: 2px solid black;
            border-radius: 5px;
            background: green;
            cursor: pointer;
            font-size: 15px;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">

        <?php foreach ($result as $finalResult) {
        ?>
            <div class="box">
                <div class="image form-group">
                    <a href="">
                        <img src="<?php echo $finalResult['image'] ?>" style="width:100px" alt="">
                    </a>
                </div>
                <div class="content form-group">
                    <a href="">
                        <p> <?php echo $finalResult['content'] ?> </p>
                    </a>
                </div>
                <div class="price form-group">
                    <a href="">
                        <?php echo $finalResult['price'] ?>
                    </a>
                </div>
                <div class="edit form-group">
                    <a href="edit_adding.php?id=<?php echo $finalResult['id']; ?>"><button class="btn btn-success btn-sm">Edit</button></a>
                </div>
                <div class="delete form-group">
                    <a href="confirm_del_adding.php?id=<?php echo $finalResult['id']; ?> "><button class="btn btn-success btn-sm">Delete</button></a>
                </div>
            </div>
            <hr>
        <?php
        }
        ?>

        <div class="add">
            <a href="adding.php"><button>Add New Product</button></a>
        </div>
    </div>
</body>

</html>