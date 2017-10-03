<?php
//String position
$string = "To be or not to be is the question.";

$position = strpos($string, "the");
echo "\"The\" is located at index {$position} in \"{$string}\"\n";

$position2 = strpos($string, "be", 10);
echo "The second occurance of \"be\" is at {$position2}.\n";

$convertString = strtolower($string);
$position3 = strpos($convertString,"the", 10);
echo "Made whole string lowercase and found the second \"the\" at index {$position3}\n";

$quote = "Courage is resistance of fear, mastery of fear, not absence of fear";
$position4 = strpos($quote, "fear", 26);
echo $position4;