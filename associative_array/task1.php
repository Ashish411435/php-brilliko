<?php

$products  = [

      [
            "title" => "Puma Sport Shoes" ,
            "stars" => 4.5 ,
            "price" => 1200 ,
            "warranty"=> 1
      ] ,
      [
            "title" => "Sparx Sport Shoes" ,
            "stars" => 4.6 ,
            "price" => 900 ,
            "warranty"=> 0.6
      ] ,
      [
            "title" => "Jordan Sport Shoes" ,
            "stars" => 4.3 ,
            "price" => 700 ,
            "warranty"=> 2 . "year"
      ] ,
      [
            "title" => "Addidas Sport Shoes" ,
            "stars" => 4.8 ,
            "price" => 800 ,
            "warranty"=> 0.3
      ] ,
];
// Recomended shoes rating wise
// Recomended shoes best price
// Recomended shoes best waranty 

// 1.
// $rating = 0;
// for($i = 0; $i < 4; $i++)
// {
//     if($products[$rating]["stars"] < $products[$i]["stars"])
//     {
//         $rating = $i;
//     }
// }
// echo $products[$rating]["title"];
// echo "<br>";

//  2.
$rating = 0;
$best_price = 0;
$best_warranty = 0;
for($i = 0; $i < 4; $i++)
{
    if($products[$rating]["stars"] < $products[$i]["stars"])
    {
        $rating = $i;
    }
    if($products[$best_price]["price"] > $products[$i]["price"])
    {
        $best_price = $i;
    }
    if($products[$best_warranty]["warranty"] < $products[$i]["warranty"])
    {
        $best_warranty = $i;
    }

}
echo $products[$rating]["title"];
echo "<br>";
echo $products[$best_price]["title"] . "<br>";
echo $products[$best_warranty]["title"] . $products[$best_warranty]["warranty"];
echo "<br>";
