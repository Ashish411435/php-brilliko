<?php

require_once("adding_db.php");

$image = $_FILES['image'];
$tmp_name = $image['tmp_name'];
$new_name = "updated_images/" . time() . $image['name'];
move_uploaded_file($tmp_name, $new_name);

$content = $_POST['content'];
$price = $_POST['price'];
$id = $_POST['id'];

$query = "UPDATE products SET image = '$new_name', content = '$content', price = '$price' WHERE id = $id";

$result = $serv->query($query);

if($result == 1)
{
    header("location:main.php");
    exit;
}
else
{
    echo $serv->error;
}