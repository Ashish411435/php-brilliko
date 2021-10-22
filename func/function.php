<?php

function greeting($name,$age)
{
    echo "Hello! My name is $name <br>";
    echo "And i learn code from brilliko <br>";
    echo "And my age is $age <br>";
}

function avg($total,$n)
{
    echo $total / $n;
}

function sum($a,$b,$c)
{
    $d =  $a + $b + $c;
    echo $d;
    echo "<br>";
    avg($d,3);
}


greeting("Ravinder",29);


greeting("Ashish",38);

greeting("Avita Pura",37);

sum(1,29,28);


