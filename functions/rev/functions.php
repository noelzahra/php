<?php
//Functions


function sum ($var1, $var2) {
    return $var1 + $var2;
}

echo sum(40, 60).PHP_EOL;

function subtract($var1, $var2) {
    $result = NULL;
    ($var1 > $var2) ? $result = $var1 - $var2 : $result = $var2 - $var1;
    return $result;
}

echo subtract(200, 180).PHP_EOL;
echo subtract(80, 200).PHP_EOL;

function convertTemp($val) {
    $tempInCelsius = ($val - 32) / 1.8;
    return $tempInCelsius;
}

echo convertTemp(68)." C".PHP_EOL;

