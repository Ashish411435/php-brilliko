<?php
$data = [ 10 , 20 , 30 ];

// for($i = 0 ; $i < 3 ; $i++)
// {
//     echo $data[$i];
//     if($i != 2){
//         echo ",";
//     }
// }
$sum = 0;
for($i = 0 ; $i < 3 ; $i++)
{
   $sum = $data[$i] + $sum;
}
echo $sum;
