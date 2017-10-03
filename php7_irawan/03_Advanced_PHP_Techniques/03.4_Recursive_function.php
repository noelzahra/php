<?php
/*
Recursive function
*/

//template for recurisve function
function recirsuveFunction() {
    if(baseCondition) {
        return; //stop recursion when condition is met
    }

    recursiveFunction(); //continue recursion
}


//While loop, stops when condition is met
$i = 0;

while($i < 3) {
    echo "run $i\n";
    $i++;
}

//Recursion - stops when condition is met

function runRecursion($i) {
    if ($i === 3) {
        return;
    }

    return "Recursion run: $i\n" . runRecursion(++$i);
}
echo runRecursion(0);


//factorial recursion
function factorial($n) {
    if ($n === 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5);
