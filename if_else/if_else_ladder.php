<?php
$friends = 7;
$pass = 1;
if($friends >= 1 && $friends <= 2)
{
    if($pass == 1){
        $amount = $friends * 1000;
        echo $amount - 500;
    }
    else{
        echo $friends * 1000;
    }
}
else if($friends >= 3 && $friends <= 5)
{
    if($pass == 1){
        $amount = $friends * 800;
        echo $amount - 500; 
    }
    else{
        echo $friends * 800;
    }
}
else if($friends >= 6 && $friends <= 10)
{
    if( $pass == 1 )
    {
        $amount = $friends * 600;
        echo $amount - 500;
    }
    else
    {
        echo $friends * 600;
    }
}