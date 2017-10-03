<?php
//null coalesce operator

$fullName = null;
//$fullName = 'Noel';
$lastName = null;

//terneray operator
$result = strval($fullName) ? true : 'Scott';
echo $result . "\n";


$int = 3;

//Null coalesce
$output = $fullName ?? $lastName ?? 'Pierre';
echo $output;
