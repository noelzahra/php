<?php

//Attempt to use array_walk was not succesful

$pages = ['lessons', 'classroom', 'teaching'];

$str ='teaching';

function validURI($array, $str){
    similar_text($array, $str, $percent);
    echo round($percent, 0);
};

array_walk($pages, 'validURI');