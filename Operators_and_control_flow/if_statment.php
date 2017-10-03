<?php
//if statement

$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];
$count = count($authors);

if ($count == 1)
{
    echo "There's only one author";
}
elseif ($count > 1)
{
    echo "Total elements in array is $count";
}
else
{
    echo "The array is empty.";
}