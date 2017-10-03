<?php
/*
  Sorting arrays:
   sort()
   ksort()
  asort()
 */

$cities = ["Sydney", "Milan", "Paris", "London" ];

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "TS Eliot",
    "Mark Twain"
);

// sort() has sort flags

echo "Unsorted cities:\n";

foreach ($cities as $name)
{
    echo $name."\n";
}


echo "\nSorted cities:\n";

sort($cities);
foreach ($cities as $name )
{
    echo $name."\n";
}

echo "\nSort authors with asort (preserves key value pairs, best for assocaiative arrays):\n";
asort($authors);
foreach ($authors as $name)
{
    echo $name."\n";
}

echo "\nSort authors with ksort (according to key):\n";
ksort($authors);
foreach ($authors as $name)
{
    echo $name."\n";
}

echo "\nReversed sort:\n";

rsort($cities);
foreach ($cities as $name)
{
    echo $name."\n";
}
