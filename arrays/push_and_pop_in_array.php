<?php
//Adding and removing from an array

$cities = ["London", "Milan", "Paris", "Sydney"];
array_push($cities, "Barcelona", "Berlin");
print_r($cities);

echo "\n\n";

//Using []syntax
echo "Added another city with the [] syntax - preferred method to add elements to array\n";
$cities[] = "Amsterdam";
$cities['north'] = "Stockholm"; //[] syntax allow to add element as an associative array
print_r($cities);

echo "\n\n";

$transport = ["boat", "bus", "ferry", "plane"];
$transport[] = "heli";
$transport['land'] = "rail";
print_r($transport);

echo "\n\n";

//removing items from the array
$bays = ["Gnejna", "Ghadira", "Paradise", "Ramla"];
$lastValue = array_pop($bays);
echo "\n\n";
echo $lastValue;
print_r($bays);