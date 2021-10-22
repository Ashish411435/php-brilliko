<?php
$price = 1000;
$inc = 5;

// 2 0r below 500
// 3 - 5 + 1000
// 6 - 9 + 8000
// 10 - 15 + 12000
// 16 or 16 above 15000

if($inc < 3){
    $price = $price + 500;
}
else if($inc >= 3 && $inc <= 5)
{
  $price = $price + 1000
}
else
{
    $price = $price + 15000
}
