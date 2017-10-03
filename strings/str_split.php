<?php
/*Splitting a string
   str_split takes a string an converts it into an array
 */

$quote = "It is a melancholy truth that even great man have their poor relations.";
$array = str_split($quote);
print_r($array);

$arrayChunks = str_split($quote, 8);
print_r($arrayChunks);

$string = "In the middle of difficulty lies opportunity";
$arraySplit = str_split($string, 4);
print_r($arraySplit);