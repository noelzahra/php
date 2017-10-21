<?php

//While loop multiplication table by 5

$num = 1;

while ($num <= 10) {
    $output = $num . ' x 5 = ';
    $output .= $num * 5 . "\n";
    $num++;
    echo $output;
}