<?php
// Arrays functions

$list = ["car", "train", "tram", "plane", "liner"];
echo count($list).PHP_EOL;

foreach ($list as $key => $item) {
    echo "$key : $item".PHP_EOL;
}


$assoc = array
(
    "uk" => "London",
    "it" => "Rome",
    "fr" => "Paris",
    "de" => "Berlin"
);

$key = array_search("Paris", $assoc);
echo "$key".PHP_EOL;

$whereIsKey = array_key_exists("de", $assoc);
echo "$whereIsKey".PHP_EOL;

unset($assoc[2]);

foreach ($assoc as $key => $item) {
    print ("$key : $item").PHP_EOL;
}

print("\n============\n");

ksort($assoc);
foreach ($assoc as $key => $item) {
    echo "$key : $item".PHP_EOL;
}