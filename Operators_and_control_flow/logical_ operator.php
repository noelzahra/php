<?php
//Logical operators

// && operator
$var1 = (6 < 7);
$var2 = (8 == 8);
$var3 = false;
$var4 = false;

$result = ( boolval($var1 && $var2) ? 'true' : 'false' );
echo "&& operator when two vars are true: $result".PHP_EOL;

$result2 = ( boolval($var1 && $var3) ? 'true' : 'false' );
echo "&& operator when two vars are not both true: $result2".PHP_EOL;

$result3 = ( boolval($var3 && $var4)? "true" : "false" );
echo "&& operator when two vars are both false: $result3".PHP_EOL;

echo "\n".PHP_EOL;

// OR logical comparator needs only one condition to return true
$result4 = ( boolval($var1 || $var2) ? "true" : "false" );
echo "OR operator when two vars are true:  $result4".PHP_EOL;

$result5 = ( boolval($var1 || $var3) ? "true" : "false" );
echo "OR operator when two vars are not both true: $result5".PHP_EOL;

$result6 = ( boolval($var3 || $var4 ) ? "true" : "false");
echo "OR operator when both vars are false: $result6".PHP_EOL;

echo "\n".PHP_EOL;

// Not logical operator returns the oposite of true and false
$result7 = ( boolval(!$var1) ? "true" : "false" );
echo "! not operator reverse a true bool to a false: $result7".PHP_EOL;

$result8 = ( boolval(!$var3) ? "true" :  "false" );
echo "! not operator reverse a false bool to a true: $result8".PHP_EOL;