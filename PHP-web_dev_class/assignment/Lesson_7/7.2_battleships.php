<?php

//battleships

const GRID_Y = 3;

$matrix = array(
    array(0, 1, 1, 0, 0),
    array(1, 0, 1, 1, 0),
    array(1, 0, 1, 0, 1)
    );

function play($x, $y) {
    global $matrix;
    return $matrix[count($matrix) - $y][$x] ? 'hit' : 'miss';
}

echo play(2, 2);

echo play(3, 1);

echo play(1, 2);