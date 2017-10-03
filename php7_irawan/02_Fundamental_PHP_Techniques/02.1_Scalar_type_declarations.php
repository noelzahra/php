<?php
/*
php 7 has scalar type declarations
Coercive - php will convert the type to the
type declaration, 
an int is shown as a double
a double is shortened to an int
an int is converted to a string
*/

function checkInt(int $a) {
    var_dump($a);
}

checkInt(100);
checkInt(2.618);//converted to an int (int declared)
//checkInt("String"); //typerror as checkInt cannot convert a string to an int

function checkDouble(float $a){
    var_dump($a);
}

checkDouble(2.618);
checkDouble(4);//converted to a double (double declared)
//checkDouble("String");//typerror as checkDouble cannot convert a string to a dobule

function checkString(string $a){
    var_dump($a);
}

checkString("Hello");
checkString(44);//converted to a string (when string declared)