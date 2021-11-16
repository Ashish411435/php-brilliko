<?php

$list = [0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1];


for($i = 0; $i < 10; $i++)
{
    if(($list[$i] + $list[$i+1]) == 2)
    {
        $result = $list[$i] + $list[$i + 1];
        echo $result;
    }
    
}