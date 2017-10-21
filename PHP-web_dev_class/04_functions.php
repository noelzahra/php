<?php

//Functions

echo "\n=============\nSwitch statement\n=============\n";

function daysPerMonth($month) {
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $days = 31;
            break;

        case 2:
            $days = 28;
            break;

        default:
            $days = 30;
    }
    return $days;
}

echo "Days in month: " . daysPerMonth(3) . "\n";
echo "Days in month: " . daysPerMonth(6) . "\n";

echo "\n=============\nAdd function\n=============\n";

function add($num1, $num2) {
    return $num1 + $num2;
}

echo "Sum = " . add(4, 5);

echo "\n=============\nPassing by reference\n=============\n";

//function(&arg) means it is passed by reference
function square(&$number) {
    $number = $number * $number;
}

$n = 5;
square($n);
echo ($n);

echo "\n=============\nPassing arg by default value\n=============\n";

function power($num, $power = 3) {
    return $num ** $power;
}

echo power(5);

echo "\n=============\nFunction without args\n=============\n";

function sum() {
    var_dump(func_get_args());
    
    $sum = 0;
    foreach (func_get_args() as $parameter) {
        $sum += $parameter; 
    }
    return $sum;
}

echo sum(2, 4, 78, 80) . "\n";

echo "\n=============\nFunction with variadic\n=============\n";

function calc($operation, ...$numbers) {
    $sum = $operation === 'add' ? 0 : 1;
    foreach ($numbers as $parameter) {
        switch($operation) {
            case 'add':
                $sum += $parameter;
                break;
            case 'multiply':
                $sum *= $parameter;
                break;
        }
    }
    
    return $sum;
}

echo calc("add", 5, 66, 33, 1,7) . "\n";
echo calc('multiply', 3, 6, 7, 22) . "\n";