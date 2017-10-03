<?php
//String replace function

$string = "To be or not to be? That is the question.";

$replaced = str_replace("be", "know", $string, $count);
echo "Using str_replace to replace \"be\" with \"know\": {$replaced}".PHP_EOL;
echo $count.PHP_EOL;

$convertString = strtolower($string);
$replaceAnother = str_replace("to", "will", $convertString, $count);
$replaceAnother = ucfirst($replaceAnother);
echo "Using str_replace to replace \"to\" with \"will\": {$replaceAnother}".PHP_EOL;
echo $count;