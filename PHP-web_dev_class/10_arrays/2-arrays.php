<?php

/* 
 * Array functions
 */

$array = ['London', 'milan', 'paris'];

function callback($value){
            echo ucwords($value) . "\n";
}
array_walk($array, 'callback');