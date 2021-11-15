<?php

function getCharge($km)
{
    if($km <= 8)
    {
        $result = $km * 10;
        return $result;
    }
    else
    {
        if($km > 8)
        {
            
            $ep = ($km - 8) * 20; 
            $result = (8 * 10) + $ep;
            return $result;

        }
    }

}

$status = getCharge(10);
echo $status;