<?php


// Sum of No. b/w (0 - 50) , Skip ( 5, 10 , 15 , 20, 25, 30, 35, 40, 45, 50. ) 

// $k = 0;
// for ($i = 1; $i <= 50; $i++)
// {   
//     for($j = 1; $j <= 10; $j++){
//         $five = $j * 5;
//         echo $five;
//     }
// }


$k = 0;
for ($i = 1; $i <= 50; $i++)
{   
   if($i % 5 != 0){
       $k = $i + $k;
   }
}
echo $k;
