<?php 

function totalScore($s1, $s2, $s3)
{
    $totalScore = $s1 + $s2 + $s3;
    return $totalScore;
}
function highScore($score)
{
    if($score > 50)
    {
        return 200;
        
    }
    else{
        return 404;
        
    }
}
$ts = totalScore(7, 8, 9);
echo $ts . "<br>";
$hs = highScore($ts);
echo $hs;
if($hs == 200){
    echo "<br>";
    echo " You Are Winner ! ";
}else if($hs == 404) {
    echo "<br>";
    echo " Oops! Better Luck Next Time";
}