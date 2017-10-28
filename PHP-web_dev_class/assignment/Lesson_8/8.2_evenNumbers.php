<?php

//Even numbers filter

$numbers = [1, 2, 3, 16, 27, 48, 99];

function findEven($value)
{
    return $value % 2 === 0;
}

var_dump( array_filter($numbers, 'findEven') );