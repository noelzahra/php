<?php

//Date converter with array_map()

include 'dateTranslate.php';

$dates = [
    '01/16/2017',
    '05/29/2017',
    '07/04/2017',
    '11/23/2017'
];

var_dump( array_map('dateTranslate', $dates) );