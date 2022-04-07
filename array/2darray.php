<?php

    // Find Largest no. in array

$marks = [
   [
      49 ,42 ,74, 63 ,63 ,73
   ],
   [
       47 ,31, 94, 92, 84 ,48 
   ] ,
   [
       48, 93, 93, 48 ,39 ,49
   ]
];

// $sum = 0;
// $big = $marks[1][0];
// for($i = 0; $i < 6; $i++)
// {
//   $sum = $sum + $marks[1][$i];
//   if($big < $marks[1][$i])
//   {
//       $big = $marks[1][$i];
//   }
// }
// echo $sum;
// echo $big;


for($i = 0 ; $i < 3; $i++)
{
     $big = $marks[$i][0];
     for($j = 0 ; $j < 6 ; $j++ )
     {
          if($big < $marks[$i][$j])
          {
              $big = $marks[$i][$j];
          }
     }
     echo $big;
     echo "<br>";
}

