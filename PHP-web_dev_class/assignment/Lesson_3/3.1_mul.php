<?php

/*
 * Function mul() 
 * vars $a and $b 
 * passed by reference
 */


function mul(&$a, &$b){
    return $a * $b;
}

$a = 4;
$b = 10;
echo mul($a, $b);