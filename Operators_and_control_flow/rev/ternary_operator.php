<?php
//Terneray operator
$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];

$output = (count($authors) > 0) ? "There are " . count($authors) . " authors" : "There are no authors";
echo $output;