<?php
$booksQuantity1 = $_GET["booksQuantity_1"];
$booksQuantity2 = $_GET["booksQuantity_2"];
$booksQuantity3 = $_GET["booksQuantity_3"];

function bookStore1($booksQuantity1)
{
    $pricePerBook_Store1 = $booksQuantity1 * 50;
    if($pricePerBook_Store1 >= 500)
    {
        $priceStore1_disc = $pricePerBook_Store1 * (10/100);
        $finalprice_Store1 = $pricePerBook_Store1 - $priceStore1_disc;
        return $finalprice_Store1;
    }else{
        return $pricePerBook_Store1;
    }
}
function bookStore2($booksQuantity2)
{
    $pricePerBook_Store2 = $booksQuantity2 * 100;
    if($pricePerBook_Store2 >= 500)
    {
        $priceStore2_disc = $pricePerBook_Store2 * (10/100);
        $finalprice_Store2 = $pricePerBook_Store2 - $priceStore2_disc;
        return $finalprice_Store2;
    }else{
        return $pricePerBook_Store2;
    }
}
function bookStore3($booksQuantity3)
{
    $pricePerBook_Store3 = $booksQuantity3 * 10;
    if($pricePerBook_Store3 >= 500)
    {
        $priceStore3_disc = $pricePerBook_Store3 * (10/100);
        $finalprice_Store3 = $pricePerBook_Store3 - $priceStore3_disc;
        return $finalprice_Store3;
    }else{
        return $pricePerBook_Store3;
    }
}

$store1 = bookStore1($booksQuantity1);
$store2 = bookStore2($booksQuantity2);
$store3 = bookStore3($booksQuantity3);

echo $store1 + $store2 + $store3;

