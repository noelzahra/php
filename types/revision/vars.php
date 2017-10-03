<?php

$int = 44;
$float = 2.618;
$string = "A string";
$bool = true;
$array = [4, 52, 2.618];

var_dump($int) . "\n";
var_dump($float) . "\n";
var_dump($string)  . "\n";
var_dump($bool) . "\n";
var_dump($array) . "\n";

$converftToInt = (int)($float);
var_dump($converftToInt) . "\n";
echo $converftToInt;