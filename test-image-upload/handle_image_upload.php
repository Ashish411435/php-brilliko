<?php
session_start();

$pic = $_FILES['pic'];
$tmp_name = $pic['tmp_name'];
$path = "web-images/" . time() . $pic['name'];
move_uploaded_file($tmp_name, $path);


// DATABASE
$con = new mysqli('localhost', 'root', '', 'test-image-upload');


function insertImage($con, $pic)
{
    $query = "INSERT INTO imageupload (image) VALUES ('$pic')";
    $result = $con->query($query);
    return $result;
}
$result = insertImage($con, $path);
echo $result;
if($result == 1)
{
    echo "You are successfully inserted the image";
    header("location:image_upload.php");
    exit;
}
else
{
    echo $con->error;
}

?>