<?php
//scalar types
declare(strict_types=1);

function addInt(int $num1, int $num2): int
{
    return $num1 + $num2;
}

echo addInt(5, 4) . "\n";
//echo addInt(5.3, 4.5) . "\n"; //TypeError declaration, expectung int, float given

function addFloat(float $num1, float $num2): float
{
    return $num1 + $num2;
}

echo addFloat(5.3, 4.5) . "\n";