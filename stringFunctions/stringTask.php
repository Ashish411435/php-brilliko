<?php

$str = "Want to play <h1>Football.</h1>";
$str2 = strip_tags($str);
$str3 = str_replace("Football", "Cricket", $str2);
echo $str3 . "<br>";
$str4 = strpos($str3, "C");
echo "Position of Cricket = " . $str4 . "<br>";
// echo $str3[3] . "<br>"; 
$totalLength = strlen($str3);
echo "Total Length of string is = " . $totalLength . "<br>";
// $length = strlen($str3); 
if($totalLength % 2 == 0)    
{
    $totalLength = $totalLength / 2;
    echo "Half of even string length is = " . $totalLength . "<br>";
    echo $str3[$totalLength] . "<br>";
    
}
else{
    echo "Length Is Odd." . "<br>";
}

?>

