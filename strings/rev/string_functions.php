<?php
// String functions

$string = 'To be or not to be, that is the question.';

echo $string.PHP_EOL;

$stringCapitalized = strtoupper($string).PHP_EOL;
echo $stringCapitalized.PHP_EOL;

$stringLowercase = strtolower($string).PHP_EOL;
echo $stringLowercase;

$stringFirstLetterCapitalized =  ucfirst($string).PHP_EOL;
echo $stringFirstLetterCapitalized;

$stringFirstLetterLowercase = strtolower($string).PHP_EOL;
echo $stringFirstLetterLowercase;

$length = strlen($string);
echo $length;
