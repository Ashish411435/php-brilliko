<?php



function calculatePriceByTax($price)
{
    if($price > 1000){
        $tax = ($price * 10) /100;
        $price = $price + $tax;
        return $price;
    }
    else{
        return $price;
    }
}
function checkTax($newPrice, $oldPrice)
{
    $checkTax = $newPrice - $oldPrice;
    return $checkTax;
}

$oprice = 1010;
$cpbt = calculatePriceByTax($oprice); 
echo "Total Price = " . $cpbt . " Rs." . "<br>";

$ct = checkTax($cpbt, $oprice);
echo " Tax Included = " . $ct . " Rs.";
