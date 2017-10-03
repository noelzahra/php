<?php
//Iterating thru a for loop

$authors = [ "Erenst Hemingway", "Ayn Rand", "Harper Lee", "Mark Twain" ];

echo "\n\n==================\nstandard for loop\n=================\n";
for ( $i = 0; $i < count($authors); $i++) 
{
    echo "Author is {$authors[$i]}.\n";
}

echo "\n\n=============\nforeach loop\n=============\n";

foreach ($authors as $author)
{
    echo "This author: $author .\n";
}

