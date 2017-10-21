<?php

/* 
 * Array functions
 */

$array = ['London', 'milan', 'paris'];
$list = function() {
    foreach($array as $key=>$index) {
            echo $key . ':' . $index;
        };
};
echo $list;

var_dump(array_walk($array, 'paris'));