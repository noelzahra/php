<?php

function arrayMerge($a, $b) {
    $mergedArray = array_merge($a, $b);
    asort($mergedArray);

    foreach ($mergedArray as $key => $value) {
        echo $key . ' for ' . $value. "\n";
    }
}

$arrayOne = [1, 4, 6, -4, -6];
$arrayTwo = [2, 3, 5, 0, 200];

arrayMerge($arrayOne, $arrayTwo);