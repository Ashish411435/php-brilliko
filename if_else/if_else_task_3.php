<?php
$pen = 4;
if ($pen <= 3){
    $price = $pen * 10;
    echo $price;
} else if ($pen >= 3 && $pen <= 30){
    $price = $pen * 6;
    echo $price;
}else if ($pen >= 100){
    $price = $pen * 4;
    echo $price;
}