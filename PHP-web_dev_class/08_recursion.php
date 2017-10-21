<?php

//Recursion
$title = <<<DOC
======================
Factorial bi for loop
is faster
======================
DOC;

echo $title;

function factorialLoop($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
}

echo "\n\n" . factorialLoop(4) . "\n";

$title = <<<DOC
======================
 Factorial recurssion
======================
DOC;

echo $title;

//Ideally a recursion is used on a small amount of iterations, it will crash at 256 count
//for loop iterator is mpore efficient than a recursion
function factorial($n) {
    if ( $n === 0 ) {
        return 1;
    }
    $result = factorial($n - 1) * $n;
    echo $result . "\n";
    return $result;
}
echo factorial(4);