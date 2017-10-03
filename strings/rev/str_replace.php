<?php
//str_replace

$string = "To be or not to be.";
echo str_replace("be", "know", $string).PHP_EOL;

$vowels =["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
$replaceVowels = str_replace($vowels, " ", "Hello world");
echo $replaceVowels.PHP_EOL;

$phrase = "You should eat fruits, vegetables, and fiber every day";
$healthy = ["fruits", "vegetables", "fiber"];
$yummy = ["pizza", "beer", "ice cream"];

$newPhrase = str_replace($healthy, $yummy, $phrase);

$quote = "Best things in life come with a lot of effort";
$searchArray = ["life", "effort"];
$replaceArray = ["work", "persuasion"];

$newQuote = str_replace($searchArray, $replaceArray, $quote);

echo $newPhrase.PHP_EOL;
echo $newQuote;