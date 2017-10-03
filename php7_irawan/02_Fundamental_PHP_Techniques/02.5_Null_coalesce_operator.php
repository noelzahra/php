<?php
//null coalesce operator

$int = 3;
$var = 6;

$resultTerneray = ($int * 2 == $var) ? true : false;
echo "Terenray operator: " . $resultTerneray . "\n";


$resultNC = ($int * 2 == $var) ?? false;
echo "Null coalesce operator: " . $resultNC . "\n";
//null coalesce operator Returns first operand if exists, otherwise second operand

$firstName = null;
$lastName = null;

$output = $firstName ?? $lastName ?? "Scott";
echo "Null coalesce operator with 3 operands: " . $output . "\n";
