<?php
//Create a substring

$quote = "Only those who will risk going too far can possibly find out how far one can go.";
    echo "Start string from index 4:".substr($quote, 4)."\n";

$subString = substr($quote, 3, -5);
echo "Range (first 3 chars to before ßlast 5 chars) within a string: ".$subString."\n";

$string="Who wants to live for ever";
$anotherSubString = substr($string, 10, 8);
echo $anotherSubString;