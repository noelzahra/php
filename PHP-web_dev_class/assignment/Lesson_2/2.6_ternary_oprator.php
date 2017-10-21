<?php
//If statement

function compare($a, $b) {
    if ($a < $b) {
        $c = -1;
    } elseif ($a > $b) {
        $c = 1;
    } else {
        $c = 0;
    }

    return $c;
}

//test function with if statment
echo compare(5, 32) . "\n";


//Ternary operator
function ternary($a, $b) {
    return ($a < $b) ? -1 : ($a > $b) ? 1 : 0;
}

//test fucntion with ternary
echo ternary(13, 8);