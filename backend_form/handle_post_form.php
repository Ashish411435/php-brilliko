<?php
$photo = $_FILES['photo'];
$tmp_name = $photo['tmp_name'];
$name = "uploads/".time().$photo['name'];
move_uploaded_file($tmp_name,$name);