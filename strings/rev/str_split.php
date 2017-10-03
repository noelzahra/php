<?php
//str_split function

$quote = "In the middle of difficulty lies opportunity";
$array = str_split($quote, 10);
foreach ($array as $value){
    echo $value.",".PHP_EOL;
}

echo "\n";

$string = str_shuffle($quote);
echo $string.PHP_EOL;

echo "\n";

$var = "Don't ask what your country can do for you, ask what you can do for your country";
$varSplit = str_split($var, 20);

foreach ($varSplit as $val) {
    echo $val.",".PHP_EOL;
}

