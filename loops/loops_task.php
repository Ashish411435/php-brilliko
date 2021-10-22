<?php

/* Sum of 0-30 , skip (20-25) */

// $a = 0;
// for($i = 0; $i <= 30; $i++)
// {
//     if( !( $i >= 20  && $i <= 25)  )
//     {
//         $a = $a + $i;
//     }
// }
// echo $a;




/* Sum of EVEN no. of 0-30 , skip (15-20)*/

$b = 0;
for($i = 0; $i <= 30; $i++)
{
    $remind = $i % 2;
    if( $remind == 0){
        if( !($i >= 15 && $i <= 20) ){
            $b = $b + $i;
        }
    }
}
echo $b;
