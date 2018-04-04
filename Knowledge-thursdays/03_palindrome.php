<?php

function isPalindrome($string): bool
{
    $string = str_replace(' ', '', $string);
    return strrev(strtoLower($string)) == strtolower($string) ? true : false;
}


//testing palindrome
$strings = ['mac', 'racecar', 'loop', 'madam', '121', '664', 'Was it a car or a cat I saw' ];

foreach($strings as $string)
{
    if(isPalindrome($string)) {
        echo $string . " is A palindrome. \n"; 
    } else {
        echo $string . " is NOT a palindrome. \n";
    }
}