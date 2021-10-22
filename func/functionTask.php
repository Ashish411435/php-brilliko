<?php

function greet()
{
    echo "Hello World" . "<br>";
}
greet();



function sum($a, $b, $c, $d, $e)
{
    $sum = $a+$b+$c+$d+$e;
    echo "Sum = " . $sum . "<br>";
}
sum(1, 2, 3, 4 ,5);



function even_odd($n)
{
    if($n % 2 == 0)
    {
        echo $n . " is even";
    }else{
        echo $n . " is odd";
    }
    echo "<br>";
}
even_odd(454);



function double_of_difference($mp, $tp)
{   
    echo "Double of Difference is = " . $mp * $tp . "<br>";
}



function difference($o, $p)
{
    $diff = $o - $p;
    echo "Difference is = " . $diff . "<br>";
    double_of_difference($diff, 2);
}
difference(10, 6);




function avg($total, $nos)
{
    echo $total / $nos;
}


function subject_marks($s1, $s2, $s3, $s4, $s5)
{
    $total_marks = $s1 + $s2 + $s3 + $s4;
    $nos = 5;
    echo "Total Marks = " . $total_marks . "<br>";
    avg($total_marks, $nos);
}
subject_marks(45, 55, 82, 65, 74);

