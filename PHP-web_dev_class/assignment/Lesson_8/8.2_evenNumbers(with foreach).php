<?php

//Even numbers filter

$numbers = [1, 2, 3, 16, 27, 48, 99];

function findEven($value)
{
    return $value % 2 === 0 ? $value : null;
}

foreach($numbers as $number)
{
   echo findEven($number) . "\n";
}