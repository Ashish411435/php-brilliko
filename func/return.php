<?php

function graceMarks($total)
{
   $t = $total + 10;
   return $t;
}

function avg($total)
{
    $a = $total / 4;
    return $a;
}

function sum($a,$b,$c,$d)
{
  $s = $a + $b + $c + $d;
  return $s;
}

$result = sum(39,20,38,39);
$result = graceMarks($result);
echo $result;
echo "<br>";
$a = avg($result);
echo $a;