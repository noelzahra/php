<?php
//functional PHP overview

declare(strict_types = 1);

function toCsv(string $csv): array
{
    return explode(',' , $csv);
}

var_dump(toCsv('The,quck,brown,fox'));

function add(float $a, float $b): float
{   
    return $a + $b;
}
var_dump(add(1.2618, 1.618));