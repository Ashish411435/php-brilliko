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

// Adding in array of array
for($i = 0; $i < 2; $i++)
{
    $sum = 0;
    for($j = 0; $j < 3; $j++)
    {
    $sum = $sum + $data[$i]["variant"][$j];
    }
    echo $data[$i]["name"] . " = " . $sum;
    echo "<br>";
}
