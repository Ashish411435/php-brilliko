<?php

$array = [

    [8, 10, 20],

    [19, 11, 18],

    [9, 33, 5] 

];


for($i = 0 ; $i < 3 ; $i++)
{
     $sum = 0;
     for($j = 0 ; $j < 3 ; $j++)
     {
           echo $j." ".$i . " <br>";
           $sum = $sum + $array[$j][$i];
     }
     echo "<h1> ".$sum." </h1> <br>";
}

?>