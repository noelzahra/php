<?php
// logical operator

$var1 = (6 < 7);
$var2 = (8 === 8);
$var3 = false;
$var4 = false;


$result = ($var1 && $var2) ? 'true' : 'false';
print $result.PHP_EOL;

$result2 = ($var2 && $var3) ? 'true' : 'false';
print $result2.PHP_EOL;

$result4 = ($var1 || $var2) ? 'true' : 'false';
print $result4.PHP_EOL;

$result5 = ($var1 || $var3) ? 'true' : 'false';
print $result5.PHP_EOL;

$result6 = ($var3 || $var4) ? 'true' : 'false';
print $result6;