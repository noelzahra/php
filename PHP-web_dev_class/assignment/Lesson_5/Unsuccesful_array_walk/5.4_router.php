<?php

//Attempt to use array_walk was not succesful

$pages = ['teaching', 'classroom', 'lessons'];

$str = 'teaching';

function validURI($array, $str){
    similar_text($array, $str, $percent);
    echo round($percent, 0);
};

var_dump(array_walk($pages, 'validURI'));