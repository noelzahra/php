<?php
//spaceship operator

$array = [60, 90, 40, 10];

function ascending($arr): array
{
    usort($arr, function($num1, $num2){
        return $num1 <=> $num2; //ascending order
    });

    return $arr;
}

var_dump(ascending($array));

function descending($arr): array
{
    usort($arr, function($num1, $num2){
        return $num2 <=> $num1; //descending order
    });

    return $arr;
}

var_dump(descending($array));