<?php
function refund($r)
{
    echo "Refund Amount = " . $r . "<br>";
}
function placeOrder($name, $price)
{   

    echo "Item Name = " . $name .  ",   Price = " . $price . "<br>";
}
function acceptOrder($status)
{
    if($status == 1)
    {
        placeOrder("Pizza", "Rs.100");
        placeOrder("Burger", "Rs.70");
        echo "Thank You ! Order Successful.";
    }
    else
    {
        echo "Your order has been cancelled. Amount will be refunded to you shortly." . "<br>   ";
        refund(100);
        refund(70);
    }
}
acceptOrder(1);

?>