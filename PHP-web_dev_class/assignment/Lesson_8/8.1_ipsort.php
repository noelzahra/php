<?php

//Sorting ip by value

$ipArray = [ '192.168.17.0', '2.2.2.2', '192.168.1.1', '127.0.0.1', '10.0.1.6' ];


function ipsort($array)
{
    asort($array, SORT_NUMERIC);
    return $array;
}

var_dump(ipsort($ipArray));