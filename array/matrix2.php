<?php
$array = [
    [10, 30, 100, 20],
    [11, 500, 40, 18],
    [19, 21, 70, 50],
    [33, 8, 90, 110]
];
$larger = 0;
for($i = 0; $i < 4; $i++)
{
    $big = $array[$i][0];
    for($j = 0; $j < 4; $j++)
    {
        if($big < $array[$i][$j])
        {
            $big = $array[$i][$j];
        }
    }
    if($larger < $big)
    {
        $larger = $big;
    }
}
echo "Larger From All Array = $larger";