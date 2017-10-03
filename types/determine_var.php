<?php

define('CHECK_CONSTANT', "Yes I'am a constant");
define('NUM_CONSTANT', 1.618 );


$intVar = 1234;
$stringVar = "Is a string";
$boolVar = false;
$floatVar = 1.618;
$floatVar2 = 2.618;

echo "int: ".is_int($intVar);

echo "\nstring: ";
echo is_string($stringVar);

echo"\nBOOL:";
echo is_bool($boolVar);

echo "\nfloat: ";
echo is_float($floatVar);

echo "\nfloat2: ";
echo is_float($floatVar2);

echo "\nConstant: ";
echo defined('CHECK_CONSTANT')."\n";
echo defined('NUM_CONSTANT');
