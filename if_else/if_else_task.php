<?php
$product = 6000;
$card = 1;
$discount = 10;

if($card == 1){
    $dis = ($product * 10) / 100;
    echo $product - $dis; 
}else{
    echo "$product";
}