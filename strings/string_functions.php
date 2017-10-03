<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 04/08/2017
 * Time: 13:06
 */
//Capitalize string function
$string = "To be or not to be is the question.";
echo "Original string: {$string}\n";

$stringCapitalized = strtoupper($string);
echo "Capitalized string with strtoupper: {$stringCapitalized}\n";

$stringLowercase = strtolower($string);
echo "Lowercase string with stringtolower: {$stringLowercase}\n";

$stringFirstCap = ucfirst($stringLowercase);
echo "Converts first char of a string to Uppercase: {$stringFirstCap}\n";

$stringLowercaseFirstWord = lcfirst($stringFirstCap);
echo "Converts first char of a string to lowercase: {$stringLowercaseFirstWord}\n";

$length = strlen($string);
echo "Length of sting with strlen: {$length}";
echo "\n";