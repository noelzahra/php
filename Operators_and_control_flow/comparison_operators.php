<?php
// String operator

$string = "Ernest";
$string .= " Hemmingway";
echo $string.PHP_EOL;


//Comparison operator

$array = ["London", "Milan", "Barcelona"];
var_dump($array).PHP_EOL;

echo "Equals operator: == \n";
var_dump(8 == 8);//returns true

echo "Identical operator: === \n";
var_dump(8 === 8);//returns true
var_dump(8 === "8");//returns false

echo "Not equal and nor Identical operator: === \n";
var_dump(7 != 6 );//returns true
var_dump(7 !== "7");//returns true

echo "greater than operator: === \n";
var_dump(7 > 6);//returns true

echo "greater than or equal operator: === \n";
var_dump(7 >= 7);//returns true

echo "less than operator: === \n";
var_dump(6 < 7);//returns true

echo "less than or equal operator: === \n";
var_dump(6 <= 6 );//returns true

echo "spaceship operator compares less then, equal to and greater than\n";
echo 8 <=> 7;//returns 1
echo "\n";
echo 7 <=> 7;//returns 0
echo "\n";
echo 6 <=> 7;//returns -1