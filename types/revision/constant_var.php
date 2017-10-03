<?php
//Constraints

define("PI_CONSTANT", 3.1416);
define("CIRCUMFERENCE", 30);

function calcCircleArea($pi, $circ) {
    return $pi * (($circ / 2) ** 2);
}

echo calcCircleArea(PI_CONSTANT, CIRCUMFERENCE) . "m2\n";

define("DISTANCE", 500);
define("TIME", 190);

function calcVelocity($dist, $time) {
    return (int)($dist / ($time / 60)) . "km/h";
}

echo calcVelocity(DISTANCE, TIME);
