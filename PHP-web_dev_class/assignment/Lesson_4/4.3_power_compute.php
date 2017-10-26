<?php

function power_compute($a, $b)
{
    return $a ** $b;
}


/*
*Iterative function
*/

function iterativePowerCompute($a, $b)
{
    $array = [];

    for($i = 0; $i <= $b; $i++)
    {
       array_push($array, power_compute($a, $i));
    }
    return $array;
}

$output = iterativePowerCompute(5, 4);

print_r($output);


/*
*Recursive function
*/

function recursivePowerCompute($a, $b)
{
    switch($b)
    {
        case 0:
            return $a ** 0;
        case 1:
            return $a ** 1;
        default:
            return $a * recursivePowerCompute($a, $b -1);
    }
}

function makeFibArray($a, $b)
{
    $array = [];

    for($i = 0; $i <= $b; $i++)
    {
        array_push($array, recursivePowerCompute($a, $i));
    }
    return $array;
}

print_r(makeFibArray(5, 4));