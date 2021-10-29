<?php
// Index Array VS Assoctive Array
// Index array which array store the data in numeric index form known as index array.
// numeric index
// eg: [20,53,53,13,56,42]
// Asscotive array store the index in string form
// nameing index
$student = [ "Assesh" , "Ludhiana" , 21 ];

echo $student[2];

$student2 = [ "firstname" => "Assesh" , "city" => "Ludhiana" , "age" => 21 ];

echo $student2["city"];

$student3 = [
    "Aseesh",
    "Rohan"
];

$student4 = [
   "name" => "Aseesh",
   "name" => "Rohan"
];

echo $student4["name"];  //ROhan

$student5 = [
    [
        "name" => "Aseesh",
        "city" => "Ludhiana"
    ],
    [
        "name" => "Rohan"
    ]
];

echo $student5[0]["name"];
echo $student5[0]["city"];
echo $student5[1]["name"];
