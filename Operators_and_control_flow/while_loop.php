<?php
// while loop

// $authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];

$var = true;
$i = 0;

while ($i < count($authors))
{
    echo "Index [".$i."] ". $authors[$i].PHP_EOL;
    $i++;
}