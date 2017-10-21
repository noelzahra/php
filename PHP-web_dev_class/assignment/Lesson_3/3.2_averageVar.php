<?php

//Calculate average function

function averageVar($first,  ...$params) {
    $sum = $first;

    foreach($params as $number) {
        $sum += $number;
    }

    return $sum / (count($params) + 1);
}

echo averageVar(2, 8, 3, 4, 5, 6, 7);

