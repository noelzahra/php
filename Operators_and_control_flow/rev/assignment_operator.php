<?php
//assignment operator

$var = 2;
$var ++;

$var1 = 6;
$var1 --;

$var2 = 12;
$var2 += 1;

$var3 = 20;
$var3 *= 2;

$var4 = 3;
$var4 = $var4 ** 3;
echo "Increment ++ " . $var . "\n" . 
    "Decrement -- " . $var1 . "\n" . 
    "Increment += " . $var2 . "\n" .  
    "Multiply += " . $var3 . "\n" .  
    "Exponential ** " . $var4;