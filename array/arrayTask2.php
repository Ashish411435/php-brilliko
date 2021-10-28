<?php
/* finding larger number in array */
// $list = [10000, 3300, 500, 31000, 81];
// $big = $list[0];
// for($i = 0 ; $i < 5 ; $i++)
// {
//     if( $big < $list[$i] )
//     {
//         $big = $list[$i];
//     }
// }
// echo $big;

/* finding smaller number in array */
// $arr = [13, 39, 50, 18, 11, 10, 8];
// $small = $arr[0];
// for($i = 0; $i < 7; $i++)
// {
//     if($small > $arr[$i])
//     {
//         $small = $arr[$i];
//     }
// }
// echo $small;

/* finding even smaller number in array */

$arr = [ 2, 39, 50, 18, 11, 10, 8 ];
$small = $arr[0];

for($i = 0; $i < 7; $i++)
{
    if($arr[$i] % 2 == 0){
        if($small > $arr[$i]){
            $small = $arr[$i];
        }
    }
}
echo $small;