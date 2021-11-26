<?php

$fullname = $_GET['fullname'];
$listcourse = "";
// foreach($course as $item){
//     $listcourse = $listcourse.$item.",";
// }
// echo $listcourse;
if(isset($_GET['course'])){
    $course = $_GET['course'];
    $listcourse = implode(",",$course);
    echo $listcourse;
}

if( strlen($fullname) > 10 ){
    header("Location:index.php");
    exit;
}

// database insert perform here
echo "insert successfully";