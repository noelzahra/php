<?php

//Calculate average function

function averageVar(...$params) {
    $sum = 0;

    foreach($params as $number) {
        $sum += $number;
    }

    return $sum / (count($params));
}

echo averageVar(2, 8, 3, 4, 5, 6, 7);