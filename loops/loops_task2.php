<?php

/* Sum of No. b/w (50 - 100) , Skip (60 - 65) */

// $b = 0;
// for($i = 50; $i <= 100; $i++){
    // if( ($i >= 60 && $i <= 65 ) == false )
//     {
//         $b = $b + $i;
//     }
// }
// echo $b;




/* Skip (80 - 85) */

// $b = 0;
// for($i = 50; $i <= 100; $i++){
//     if( ($i >= 80 && $i <= 85 ) == false )
//     {
//         $b = $b + $i;
//     }
// }
// echo $b;



/* Sum of No. b/w (50 - 100) , skip (60 - 65) & (80 - 85) */

$c = 0;
for($i = 50; $i <= 100; $i++){
    if($i >= 50 && $i <= 59)
    {
        $c = $c + $i;
    }else if ( $i >= 66 && $i <= 79){
        $c = $c + $i;
    }else if($i >= 86 && $i <= 100){
        $c = $c + $i;
    }
}
echo $c;
