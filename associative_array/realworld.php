<?php

$prouducts  = [


      [
        "title" => "Mi LED TV 32 INCH" ,
        "description" => "Nice TV" ,
        "stars" => 4.5 ,
        "price" => 15000
      ] ,

      [
        "title" => "Real Me LED TV 32 INCH" ,
        "description" => "Nice TV" ,
        "stars" => 4.9 ,
        "price" => 12000
      ] ,

      [
        "title" => "TLC Me LED TV 32 INCH" ,
        "description" => "Nice TV" ,
        "stars" => 3.9 ,
        "price" => 20000
      ]


];

$rating = 0;
for($i = 0 ; $i < 3 ; $i++)
{
    if( $prouducts[$i]['stars'] > $prouducts[$rating]["stars"] )
    {
       $rating = $i;
    }
}

echo $prouducts[$rating]["title"];