<?php

$tp = 201;
$ep = 0;
$forget = 0 ;

/* 0 - 50 */
if ($tp >= 1 && $tp <= 50) {
    if($forget == 1) {
        $ftp = $tp + $ep;
        if($ftp >= 1 && $ftp <= 50){
            $ftp = $ftp * 0.50;
            echo $ftp;
        }elseif($ftp > 50 && $ftp <= 100){
            $ftp = $ftp * 0.40;
            echo $ftp;
        }elseif($ftp > 100 && $ftp <= 200){
            $ftp = $ftp * 0.30;
            echo $ftp;
        }else{
            $ftp = $ftp * 0.25;
            echo $ftp;
        }
    }
    else{
        if($ep <= 50 ){
            $fep = $ep * 0.50;
            $tp = $tp * 0.50 + $fep;
            echo $tp;
        }
        elseif($ep > 50 && $ep <= 100){
            $fep = $ep * 0.40;
            $tp = $tp * 0.50 + $fep;
            echo $tp;
        }
        elseif($ep > 100 && $ep <= 200){
            $fep = $ep * 0.30;
            $tp = $tp * 0.50 + $fep;
            echo $tp;
        }
        else{
            if($ep > 200){
                $fep = $ep * 0.25;
                $tp = $tp * 0.50 + $fep;
                echo $tp;
            }
        }
        
    }    
}


/* 50 - 100 */
elseif ($tp > 50  && $tp <= 100) {
    if($forget == 1) {
        $ftp = $tp + $ep;
        if($ftp >= 1 && $ftp <= 50){
            $ftp = $ftp * 0.50;
            echo $ftp;
        }elseif($ftp > 50 && $ftp <= 100){
            $ftp = $ftp * 0.40;
            echo $ftp;
        }elseif($ftp > 100 && $ftp <= 200){
            $ftp = $ftp * 0.30;
            echo $ftp;
        }else{
            $ftp = $ftp * 0.25;
            echo $ftp;
        }
    }        
    else{
        if($ep <= 50 ){
            $fep = $ep * 0.50;
            $tp = $tp * 0.40 + $fep;
            echo $tp;
        }
        elseif($ep > 50 && $ep <= 100){
            $fep = $ep * 0.40;
            $tp = $tp * 0.40 + $fep;
            echo $tp;
        }
        elseif($ep > 100 && $ep <= 200){
            $fep = $ep * 0.30;
            $tp = $tp * 0.40 + $fep;
            echo $tp;
        }
        else{
            if($ep > 200){
                $fep = $ep * 0.25;
                $tp = $tp * 0.40 + $fep;
                echo $tp;
            }
        }
        
    }    
}
/* 100 - 200 */
elseif ($tp > 100 && $tp <= 200) {
    if($forget == 1) {
        $ftp = $tp + $ep;
        if($ftp >= 1 && $ftp <= 50){
            $ftp = $ftp * 0.50;
            echo $ftp;
        }elseif($ftp > 50 && $ftp <= 100){
            $ftp = $ftp * 0.40;
            echo $ftp;
        }elseif($ftp > 100 && $ftp <= 200){
            $ftp = $ftp * 0.30;
            echo $ftp;
        }else{
            $ftp = $ftp * 0.25;
            echo $ftp;
        }
    }        
    else{
        if($ep <= 50 ){
            $fep = $ep * 0.50;
            $tp = $tp * 0.30 + $fep;
            echo $tp;
        }
        elseif($ep > 50 && $ep <= 100){
            $fep = $ep * 0.40;
            $tp = $tp * 0.30 + $fep;
            echo $tp;
        }
        elseif($ep > 100 && $ep <= 200){
            $fep = $ep * 0.30;
            $tp = $tp * 0.30 + $fep;
            echo $tp;
        }
        else{
            if($ep > 200){
                $fep = $ep * 0.25;
                $tp = $tp * 0.30 + $fep;
                echo $tp;
            }
        }
        
    }    
}

/* > 200 */
else{
    if($forget == 1) {
        $ftp = $tp + $ep;
        if($ftp >= 1 && $ftp <= 50){
            $ftp = $ftp * 0.50;
            echo $ftp;
        }elseif($ftp > 50 && $ftp <= 100){
            $ftp = $ftp * 0.40;
            echo $ftp;
        }elseif($ftp > 100 && $ftp <= 200){
            $ftp = $ftp * 0.30;
            echo $ftp;
        }else{
            $ftp = $ftp * 0.25;
            echo $ftp;
        }
    }        
    else{
        if($ep <= 50 ){
            $fep = $ep * 0.50;
            $tp = $tp * 0.25 + $fep;
            echo $tp;
        }
        elseif($ep > 50 && $ep <= 100){
            $fep = $ep * 0.40;
            $tp = $tp * 0.25 + $fep;
            echo $tp;
        }
        elseif($ep > 100 && $ep <= 200){
            $fep = $ep * 0.30;
            $tp = $tp * 0.25 + $fep;
            echo $tp;
        }
        else{
            if($ep > 200){
                $fep = $ep * 0.25;
                $tp = $tp * 0.25 + $fep;
                echo $tp;
            }
        }
        
    }    
}







