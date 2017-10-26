<?php

function spacedString($s)
{
    //$array[] = str_split($s, 1);
    
    $array = [];
    $array = str_split($s, 1);
    $output = implode(" ", $array);

    //var_dump($array);
   return $output;
}

echo spacedString('icemalta');