<?php
//Remove specifc elements from array or a whole array

$cities = ["London", "Milan", "Paris", "Sydney"];
unset($cities[1], $cities[0]); //removed 'Milan' and 'London'
print_r($cities);

echo "\n\n";

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "TS Eliot",
    "Mark Twain"
);

unset($authors['brilliant']); //removed "Jane Austin"
foreach ($authors as $key => $item) {
    echo "$key = $item\n";
}

//Remove a whole array
//unset($cities);
//print_r($cities);// removed $cities