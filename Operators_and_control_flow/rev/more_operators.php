<?php
//Operators

//Variable variables
$http = "80";
$$http = "protocol";

echo ${ "80" } . "\n";

$name  = "Scott";
$$name = "Rabat";

echo $Scott . "\n";

$array = [1, 3,44, 8];
$newArray = [true, 2.618, "string"];
var_dump($array) . "\n";
var_dump($newArray) . "\n";

const PI_CONSTANT = 3.1456;

function areaOfCircle($radius) {
    return PI_CONSTANT * ( $radius * 2 ) . "m2\n";
}

$area = areaOfCircle(50);
echo $area;

$year = 2004;
$isLeapYear = ($year % 400 === 0) || ($year % 4 === 0 && $year % 100);
var_dump($isLeapYear);