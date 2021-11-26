<?php

require_once("adding_db.php");

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
$result = $serv->query($query);
if($result == null)
{
    echo "Oops Something Went Wrong...";
    exit;
}

$finalresult = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Adding</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <div class="container">

        <form action="update_adding.php" method="post" enctype="multipart/form-data">
            <h3>Edit</h3>
            <div class="adding_form">
                <label for="">Image</label>
                <input type="file" name="image" value="<?php echo $finalresult['image']?>" id="">            
            </div>
            <br>
            <div class="adding_form">
                <label for="">Content</label>
                <input type="text" name="content" value="<?php echo $finalresult['content']?>" id="">
            </div>
            <br>
            <div class="adding_form">
                <label for="">Price</label>
                <input type="text" name="price" value="<?php echo $finalresult['price']?>" id="">
            </div>
            <div class="adding_form">
                <input type="hidden" name="id" value="<?php echo $finalresult['id']?>" id="">
            </div>
            <div class="adding_form">
                <a href=""><button class="btn btn-success btn-sm">Update</button></a>
            </div>
            
        </form>
    </div>
</body>
</html>