<?php

    // Find the sum of 2d array

$marks = [
    [
       49 ,42 ,74, 63 ,63 ,73
    ],
    [
        47 ,31, 94, 92, 84 ,48 
    ] ,
    [
        48, 93, 93, 48 ,39 ,49
    ]
 ];

for($i = 0; $i < 3; $i++)
{
    $sum = 0;
    for($k = 0; $k < 6; $k++)
    {
        $sum = $sum + $marks[$i][$k];
    }
    echo $sum;
    echo "<br>";
}