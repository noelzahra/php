<?php
function getMaxValue($a, $b)
{
    return (max($a) - $b);
}

echo getMaxValue([30, 0], 20) . "\n";
echo getMaxValue([20, 0], 30);