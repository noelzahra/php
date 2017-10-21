<?php

// Function getForce()

const g = 9.8;

function getForce($m) {
    return $m * g;
}

echo getForce(10);