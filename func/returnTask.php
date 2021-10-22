<?php

function payTax($tax)
{

    if($tax > 500){
        return 1 ; 
        
    }
    else{
        return 0 ;
    }
}


function countPrice($b1, $b2 , $b3)
{
    $tp = $b1 + $b2 + $b3;
    return $tp;
}
$price = countPrice(30, 60, 50);
echo $price . "<br>";
$ptax = payTax($price);
echo $ptax . "<br>";
if($ptax == 1)
{
    echo "You have to pay tax";
}else
{
    echo "You don't have to pay tax";
}