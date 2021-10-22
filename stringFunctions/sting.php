<?php
$city = "Ludhiana";
$uppercity = strtoupper($city);
$lowercity = strtolower($city);
echo $city;
$qu = "India Danda USX";
$qu2 = str_replace("Danda","Canda",$qu);
$qu3 = str_replace("USX","USA",$qu2);
$qu4 = str_replace("Danda USX","Canda USA",$qu);
echo $qu4 . "<br>";
$str = "My Name is Gurinderpal-Singhz,I am 25 years old-";
//"My Name is Gurinderpal Singh.I am 25 years old.";
// $str = str_replace("-S", " S", $str);
// $str = str_replace(",", ".", $str);
// $str = str_replace("-", ".", $str);
// echo $str;
// $str2 = str_replace("l-S,", " ", $str);
// $str3 = str_replace("-", ". ", $str2);
// echo $str3;

$start = strrpos($str,"z");

echo $start;

$para = "<h1>Hello</h1>";
$para = strip_tags($para);
echo $para;
$len = strlen($para);
echo $len;