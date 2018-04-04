<?php
 function convertToPigLatin($phrase)
 {
    $words = explode(' ', $phrase);
    foreach ($words as $word) {
        $pattern = "/^([A-Z, a-z]*)(.*)$/i";
        $replacements = "$2 $1ay";
        $pigLatin = preg_replace($pattern, $replacements, $word);
        return $pigLatin;
    }
 }

 $phrase = 'The quick brown fox';
 echo convertToPigLatin($phrase);