<?php

$url = '/student/53';

function findId($url) {
    preg_match('/([0-9]+)$/', $url, $id);
    return $id;    
}

var_dump(findId($url));