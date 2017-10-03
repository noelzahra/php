<?php
//Strict mode for return typr declaration
declare(strict_types=1);

function sum(float $num1, float $num2): float
{
    return $num1 + $num2;
}

echo sum(2.168, 4.272) . "\n";
echo sum(4, 3) . "\n";
//echo sum(1.618, '4'); //TypeError expectinf float, string passed