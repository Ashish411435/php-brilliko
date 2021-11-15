<?php

function toy($money, $check)
{
    if($check == 0)
    {
        $tax = ($money * 18)/100;
        $totalPrice = $money + $tax;
        return $totalPrice;
    }
    else
    {
        $totalPrice = $money;
        return $totalPrice;
    }
}

$status = toy(1000, 0);
echo $status;