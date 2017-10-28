<?php

$url = '/student/53';

function findId($url) {
    preg_match('/([0-9]+)$/', $url, $id);
    return $id;    
}

/**
 * for some reason this function gets the value
 * listed twice in var_dump array
*/
var_dump(findId($url));