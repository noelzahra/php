<?php
// Comparison operator

// $string = "Ernest";
// $string .= " Hemingway";
// echo $string.PHP_EOL;

// echo ((8 == 8) ? "true" : "false").PHP_EOL;
// echo ((8 === '8') ? "true" : "false").PHP_EOL;
// echo ((7 != 6) ? "true" : "false").PHP_EOL;
// echo ((6 != 6) ? "true" : "false").PHP_EOL;
// echo ((6 <= 6) ? "true" : "false").PHP_EOL;


$string = "Ernest";
$string .= " Hemingway";
echo $string . "\n";

echo (8 === 8) ? "true" : "false";
echo  "\n";
echo ( 8 === "8") ? "true" : "false";
echo  "\n";
echo (8 == "8") ? "true" : "false";
echo  "\n";
echo (7 > 6) ? "true" : "false";
echo  "\n";
var_dump (8 != 9);
var_dump (9 > 8) && (10 < 12);
var_dump (11 > 16) && (12 < 13);
var_dump (4 < 8) || (13 > 14);