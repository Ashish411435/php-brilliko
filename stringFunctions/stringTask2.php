<?php

function changeDot($string)
{
    $string2 = str_replace(".H", " H", $string);
    return $string2;
}
function cases($s)
{
    $length = strlen($s);
    echo "Length of Corrected String = $length <br>" ;
    if($length % 2 == 0){
        echo "If length is even, change string in Lower Case = " . strtolower($s);
    }else{
        echo "If length is odd, change string in Upper Case = " . strtoupper($s);
    }
}
$wrongStr = "Hello.Hi.Hey";
echo "Wrong String = $wrongStr";
echo "<br>";

$correctedStr = changeDot($wrongStr);
echo "Corrected String = $correctedStr";
echo "<br>";

$lengthOfCorrected = cases($correctedStr);
echo $lengthOfCorrected . "<br>";


