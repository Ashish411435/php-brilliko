<?php
session_start();

require_once("adding_db.php");

$image = $_FILES['image'];
$tmp_name = $image['tmp_name'];
$image_name = "pics/" . time() . $image['name'];
move_uploaded_file($tmp_name, $image_name);

$content = $_POST['content'];
$price = $_POST['price'];

/**
    Here We will check if the content already exist or not.
*/


/* CONTENT EXIST */
function checkContentExist($serv, $image, $content)
{
    $result = $serv->query("SELECT * FROM products WHERE image = '$image' OR content = '$content' ");
    return $result;
}
$result = checkContentExist($serv,$image, $content);
if($result->num_rows == 1)
{
    $_SESSION['alreadyExist'] = "The Content is Already Exist";
    header("Location:adding.php");
    exit;
}  

/* INSERT CONTENT */
function insertContent($serv, $image, $content, $price)
{
    $status = $serv->query("INSERT INTO products (image, content, price) VALUES('$image', '$content', '$price') ");
    return $status;
}

$status = insertContent($serv, $image_name, $content, $price);
echo $status;
if($status == 1)
{
    $_SESSION['successMsg'] = "Successfully Registered";
    header("Location:adding.php");
    exit;
}
else
{
    echo $serv->error;
}

?>