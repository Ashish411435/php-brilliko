<?php

/* Print of ODD No. b/w (1 - 10) No. */ 

// for($i = 0; $i < 10; $i++)
// {
   //     $result = $i % 2;
   //     if( $result != 0)
   //     {
      //         echo $i;
//         echo "<br>";
//     }
//     // echo "Runing <br>";
// }



/* Print of EVEN No. b/w (1 - 10) No. */ 
$sum = 0;
for($i = 1; $i <= 10; $i++)
{
     if($i % 2 == 0)
     {
        $sum = $sum + $i;
     }
}
echo $sum;