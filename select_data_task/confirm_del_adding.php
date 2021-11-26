<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete Adding</title>
</head>
<body>

<?php

$id = $_GET['id'];

?>
    <div class="container">
        <a href="del_adding.php?id=<?php echo $id;?> "><button>Confirm</button></a>
        <a href="main.php"><button>Discard</button></a>
    </div>
</body>
</html>