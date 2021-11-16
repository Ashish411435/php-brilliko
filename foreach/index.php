<?php
$data = [ 49 , 24 , 52 ,13 , 58];
$sum = 0;
foreach($data as $d)
{
    $sum = $d + $sum;
}
echo $sum;