<?php
//Null coalesce operator

$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];
//$authors = [];
$count = count($authors);

echo "Null coalesce operator is a condensed ternary operator\n";

//Ternary operator:
$outcome = $count ? $count : "No authors listed";
echo $outcome.PHP_EOL;

//Null coalesce operator:
$outcome2 = $count ?? "Count unavailable";
echo $outcome2,PHP_EOL;

//Null coalesce operator can have variables chained
$secondVar = $authors[2];
$thirdvar = $authors[3];
$outcome3 = $secondVar ?? $thirdvar ?? $secondVar ?? "Unavailable";
echo $outcome3;