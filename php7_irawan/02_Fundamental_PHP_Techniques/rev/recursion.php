<?php
//Recursion
function run($i) {
    if($i === 5) {
        return;
    }

    return  "Run: $i\n" . run(++$i);
}

echo run(0);

//Factorial function
echo "\n============\nFactorial\n============\n";
function factorial($n) {
    if($n === 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);