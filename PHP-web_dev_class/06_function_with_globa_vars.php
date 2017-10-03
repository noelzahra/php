<?php

//Accessing global vars within a function scope

echo "=============================================\nAccessing global vars within a function scope\n=============================================\n";
$var = 5;

function callVar() {
    global $var;
    echo $var;
}

callVar();

$var2 = 8;

function changeVar() {
    $var2 = &$GLOBALS['var2'];
    echo $var2;
}