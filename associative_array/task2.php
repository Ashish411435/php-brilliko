<?php
$data = [

    [
        "name" => "Hyundai Verna",
        "speed" => 180,
        "variant" => [180, 220, 250]
    ],
    [
        "name" => "Thar",
        "speed" => 180,
        "variant" => [250, 300, 250]
    ]
];

for($i = 0; $i < 2; $i++)
{
    if($data[$i]["variant"])
    {
        $sum = 0;
        for($j = 0; $j < 3; $j++)
        {
            $sum = $sum + $data[$i]["variant"][$j];
        }
    }
    echo $sum;
    echo "<br>";
}
