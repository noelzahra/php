<?php
//Multiply array elements

const MULTIPLIER = 5;

$numbers = [2, 3, 5, 6, 8, 10];

function multiply($array)
{
    foreach($array as $value)
    {
        echo $value * MULTIPLIER . "\n";
    }
}

multiply($numbers);
