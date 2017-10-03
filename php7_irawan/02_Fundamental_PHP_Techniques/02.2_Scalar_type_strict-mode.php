<?php
/*
php 7 has scalar type declarations
Strict - php expects type to conform
to type declaration, 
an int is shown as a double
a double is shortened to an int
an int is converted to a string
*/

declare(strict_types=1);

//strict mode check for int type
function checkInt(int $a){
    var_dump($a);
}

checkInt(44);
//checkInt(2.618);//TypeError checkInt strict mode declaration accepts int only


function checkDouble(float $a){
    var_dump($a);
}

checkDouble(2.618);
checkDouble(33);//Passes as double
//checkDouble(true);//TypeError checkDouble strict mode declaration accepts double only


function checkBool(bool $a){
    var_dump($a);
}

checkBool(true);
checkBool(false);
checkBool(1);//TypeError checkBool strict mode declaration accepts bool only