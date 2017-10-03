<?php
// foreach()

$cities = ["Sydney", "Milan", "Paris", "London" ];
foreach ($cities as $val)
{
    echo $val."\n";
}

echo "\n";
$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "TS Eliot",
    "Mark Twain"
);

echo "\nListing by key:\n";

foreach ($authors as $key => $val)
{
    echo "$val = $key\n";
}
