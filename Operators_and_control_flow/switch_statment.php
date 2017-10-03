<?php
// switch statement
$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];
$count = count($authors);

switch ( $count )
{
    case 0:
        echo "There are no elements in authors".PHP_EOL;
        break;
    case 1:
        echo "There are $count elements in authors".PHP_EOL;
        break;
    default:
        echo "There are $count elements in authors".PHP_EOL;
}

echo "\n\n";

$cities = ["London", "Milan", "Munich"];
switch (count($cities))
{
    case 0:
        echo "There are no cities";
        break;
    case 1:
        echo "There's only ".count($cities)." city.".PHP_EOL;
        break;
    default:
        echo "There are ".count($cities)." cities.".PHP_EOL;
}


echo "\n\n";


$var1 = 6;
$var2 = 7;

switch ( $var1 <=> $var2 )
{
    case 1:
        echo"$var1 greater $var2 than";
        break;
    case 0:
        echo "$var1 Equal $var2";
        break;
    case -1:
        echo "$var1 less than $var2";
        break;
}