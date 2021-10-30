<?php
$product_price = $_GET['product_price'];
$product_gst = $_GET['product_gst'];
$discount = $_GET['discount'];

$product_gst = $product_price * $product_gst/100;
$total_price = $product_price + $product_gst;
$price_with_discount = $total_price * $discount/100;
$final_price = $total_price - $price_with_discount;
echo $final_price;



