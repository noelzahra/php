<?php
//while loop

$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];

$i = 0;

while ($i < count($authors)) {
    echo "index [" . $i . "]: " . $authors[$i] . "\n";
    $i++;
}