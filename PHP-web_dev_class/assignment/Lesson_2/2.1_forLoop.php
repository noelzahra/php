<?php

//For loop: multiplication y 5

$table = function(){
    for( $i = 1; $i <= 10; $i++) {
        $output = $i . ' x 5 = ';
        $output .= $i * 5 . "\n";
        echo $output;
    }
};

$table();