<?php
function item($itemPrice)
{
    // $itemPrice = 600;
    if($itemPrice < 500)
    {
        delivery_charges($itemPrice, 40);
    }
    else{
        echo " Total Price of Your order =  " . "Rs.". $itemPrice . "/- Only";
    }
}

item(200);


function delivery_charges($item_price ,$del_charges)
{
    echo "Total Price = " . $item_price + $del_charges .  " <br> " . "  40Rs. Extra delivery Charges. ";
}

?>