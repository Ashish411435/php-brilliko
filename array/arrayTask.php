<?php

// $teamScore = [10, 33, 5, 31, 81];
// $add = 0;

/* Add all Numbers in array */
// for ($i = 0; $i < 5; $i++)
// {
//     $add = $teamScore[$i] + $add;
// }
// echo "Total Score = $add";
// echo "<br>";


/* Add Number Above 20 In Given Array */
// for ($i = 0; $i < 5; $i++)
// {
//     if( ($teamScore[$i] >= 0 && $teamScore[$i] <= 20) == false )
//     {
//         $add = $teamScore[$i] + $add;
//     }
// }
// echo " Addition of numbers above 20 = $add";


/* Addition of odd numbers in given Array */
// $teamScore = [10, 33, 50, 31, 81];
// $add = 0;
// for ($i = 0; $i < 5; $i++)
// {
//     if($teamScore[$i] % 2 != 0)
//     {
//         $add = $teamScore[$i] + $add;
//     }
// }
// echo " Addition of Odd numbers above in given array = $add";


/* Show the Greater Number in Array*/
$tS = [10000, 3300, 500, 31000, 81];
for ($i = 0; $i < 5; $i++)
{
    if( $tS[0] > $tS[1] && $tS[0] > $tS[2] && $tS[0] > $tS[3] && $tS[0] > $tS[4] ) 
    {
        $result =  $tS[0] . " is Greater";
    }
    else if( $tS[1] > $tS[2] && $tS[1] > $tS[3] && $tS[1] > $tS[4] )
    {
        $result =  $tS[1] . " is greater";
    }
    else if( $tS[2] > $tS[3] && $tS[2] > $tS[4] )
    {
        $result =  $tS[2] . " is greater";
    }
    else if( $tS[3] > $tS[4] )
    {
        $result =  $tS[3] . " is greater";
    }
    else{
        $result =  $tS[4] . " is greater";
    }
}
echo $result;

