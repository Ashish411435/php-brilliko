<?php

/* Same Task as stringTask2.php */

function changeDot($string)
{
    $string2 = str_replace(".H", " H", $string);
    return $string2;
}

$str = changeDot("Hello.Hi.Hey");
echo $str . "<br>";

$stringLength = strlen($str);
echo "Length of String = $stringLength" . "<br>";

if($stringLength % 2 == 0){
    $lower = strtolower($str);
    echo "Even In Lowercase = $lower ";
}else{
    $upper = strtoupper($str);
    echo "Odd In Uppercase = $upper ";
}
