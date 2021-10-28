<?php

$data = [
[48 , 48 ,19 , 34 ],
[34 , 34 ,34 , 54 ],
[53 , 62 ,51 , 61 ],
[50 , 42 ,51 , 31 ]

];

$total_even_sum = 0;
$count = 0; 
for ($i = 0; $i < 4; $i++)
{
    $add = 0;
    for($j = 0; $j < 4; $j++)
    {
        if($data[$i][$j] % 2 == 0)
        {
            $add = $add + $data[$i][$j];
        }
        if($data[$i][$j] < 50)
        {
            $count = $count + 1;
        }
    }
    echo "Sum Of Even Numbers = $add <br>";
    $total_even_sum = $total_even_sum + $add;
}
echo "Total Sum Of Even Numbers = $total_even_sum <br>" ;
echo "Count Numbers Less Than 50 = $count <br>";