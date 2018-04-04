<?php

//for loop
function FactorialLoop($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
}

echo FactorialLoop(5) . "\n";

//Recursion
function Factorial($n) {
    if ( $n === 0 ) {
        return 1;
    }
    $result = Factorial($n - 1) * $n;

    return $result;
}
echo Factorial(5);