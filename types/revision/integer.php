<?php
//Integer type

function checkType ($var) {
    var_dump($var) . "\n";
}

$regInt = 123;
$double = 1.272;
$float = 2.5;
$scientific = 618E4;
$bool = true;
$hasValue = "";
$string = "String";

checkType($regInt);
checkType($double);
checkType($float);
checkType($scientific);
checkType($string);
checkType($bool);
checkType($hasValue);

print_r (is_bool($bool));