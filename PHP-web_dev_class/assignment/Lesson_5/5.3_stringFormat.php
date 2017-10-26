<?php

function spacedString($s)
{
    $array = [];
    $array = str_split($s, 1);
    $output = implode(" ", $array);

   return $output;
}

echo spacedString('icemalta');