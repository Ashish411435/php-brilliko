<?php
$bookPrice = 700;
if($bookPrice > 500)
{
    $bookPrice = $bookPrice - 100;
    echo "Price With Discount = $bookPrice";
}
else{
    echo "Normal Price = $bookPrice ";
}