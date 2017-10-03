<?php
//Return type declaration

function sum(float $num1, float $num2): int
{
    return $num1 + $num2;
}

function sumFloat(float $num1, float $num2): float
{
    return $num1 + $num2;
}

echo sum(1.618, 2.618) . "\n";
echo sumFloat(1.618, 2.618) . "\n";