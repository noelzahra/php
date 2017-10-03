<?php
//If loop

$authors = ["Ayn Rand", "Erenst Hemingway", "Joseph Heller", "Mark Twain"];


if (count($authors) == 1) 
{
    echo "There are " . count($authors) . " authors list.";
}
elseif (count($authors) > 1)
{
    echo "There are " . count($authors) . " authors.";
} 
else {
    echo "There are no authors";
}