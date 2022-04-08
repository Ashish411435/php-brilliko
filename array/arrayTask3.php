<?php

// Find the numbers in array less than 40
$arr = [35, 85, 7, 9, 33, 40];
$count = 0;
for($i = 0; $i < 6; $i++)
{
    
    if($arr[$i] < 40)
    {      
       $count =  $count + 1;
    }
}

echo $count;

?>