<?php

function avg($total, $n)
{
    $avrg = $total / $n;
    return $avrg;
}

function sum($s1, $s2, $s3, $s4, $s5)
{
    $s = $s1 + $s2 + $s3 + $s4 + $s5;
    return $s;
}
$result = sum(90,67,55,68,75);
echo $result . "<br>";

$avrg = avg($result, 5);
echo $avrg;