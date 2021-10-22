<?php
$product = 4999;
$card = 1;
if($product >= 5000 && $product < 50000){
    if($card == 1){
        $discount = ($product * 10) / 100;
        echo $product - $discount;
    }else{
        echo $product;
    }
}
else if($product >=50000 && $product < 100000){
    if($card == 1){
        $discount = ($product * 20) / 100;
        echo $product - $discount;
    }
    else{
        echo $product;
    }
}
else if($product >= 100000){
    if($card == 1){
        $discount = ($product * 21) /100;
        echo $product - $discount;
    }
    else{
        echo $product;
    }
}
else{
    echo $product;
}