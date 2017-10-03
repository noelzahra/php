<?php
//Ternary operator

$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];
$count = count($authors);

echo "Ternerary operator format: (exp1) ? (exp2) : (expr3)\n";

$result = ($count > 0) ? "There are $count authors" : "There are no authors";
echo $result;