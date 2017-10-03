<?php

// Function with array map

/**
 * 
 * @param type $n
 * @return type
 */

 echo "=============================\nFunction with array map\n=============================\n";
 function multiplyByN($n) {
//PHP closure
//Using lambda within the scope of the named func
    return function($num) use($n) {
        return $num * $n;
    };
}

$array = [5, 6, 67, 78];
var_dump(array_map(multiplyByN(2), $array)); 