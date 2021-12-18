<?php

for ($i = 1; $i <= 5; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

for ($j = 1; $j <= 5; $j++) {
    for ($l = 1; $l <= $j; $l++) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br>";

for ($l = 0; $l <= 5; $l++) {
    for ($k = 5 - $l; $k >= 1; $k--) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

for ($l = 0; $l <= 5; $l++) {
    // 1  1 < 5 
    // *****
    // ****
    // ***
    // **
    // *
    for ($m = 1 + $l; $m <= 5; $m++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";


//       *
//      ***
//     *****
//    *******

// for ($i = 1; $i <= 5; $i++) {
//     for ($k = 1; $k <= $i; $k++) {
//         echo " &nbsp". "*";
//     }
//     echo "<br>";
// }

echo "<br>";


for ($i = 0; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}


echo "<br>";

for ($i = 0; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($k = 5; $k >= $i; $k--) {
        echo "   ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
