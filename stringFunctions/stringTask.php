<?php

$str = "Want to play <h1>Football.</h1>";

// 'strip_tags' is used to remove any tags of html
$str2 = strip_tags($str);

/* 'str_replace', is used to replace anything within the string. 
 It takes three parameters (str_replace("the thing you want to change in the string" , "new thing you want to put in the string", "String variable name") */
 $str3 = str_replace("Football", "Cricket", $str2);
 echo $str3 . "<br>";
 
//  'strpos' is used to find any letter or word in the string. It takes two paramerter (strpos("String variable", "name of word of letter that you want to search")).
$str4 = strpos($str3, "C");
echo "Position of Cricket = " . $str4 . "<br>";
echo $str3[3] . "<br>"; 

// 'strlen(), is used to find the length of string including white space.
$totalLength = strlen($str3);
echo "Total Length of string is = " . $totalLength . "<br>";
$length = strlen($str3); 
if($totalLength % 2 == 0)    
{
    $totalLength = $totalLength / 2;
    echo "Half of even string length is = " . $totalLength . "<br>";
    echo $str3[$totalLength] . "<br>";
    
}
else{
    echo "Length Is Odd." . "<br>";
}

// 'str_repeat("$string", $time(time in integers)), is used to repeat the string many times you want.
echo "str_repeat function = " . str_repeat($str2, 3). "<br>";

// str_word_count("$string"), used to count word in string.
echo "word counts are = " . str_word_count($str);

// rtrim(), rtrim means trim the white spaces from right side of the string.
echo "<pre>";
echo rtrim("<pre>      This is string.        </pre>");
echo "</pre>";

// ltrim(), ltrim means trim the white spaces from left side of the string.
echo "<pre>";
echo ltrim("      This is string.        ");
echo "</pre>";

?>

