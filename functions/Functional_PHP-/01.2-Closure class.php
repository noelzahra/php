<?php
/*
Functions are first-class objects
Fucntions are instances of Closure class
Anonymous functions - lambda expression
*/

$factor = 10;

$result = array_map(function(int $number) use ($factor): int 
{
    return $number * $factor;
}, [10, 20, 30]);

var_dump($result);

//proving functions are closures
var_dump(function() {});