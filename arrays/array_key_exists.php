<?php
// Access index or key in an array

$sports = ['Running', "Cycling", "Paragliding", "Kayaking"];
$activities = array(
    "land" => "Trekking",
    "sea" => "Yachting",
    "sky" => "Gliding",
    10 => "Bowling"
);

print_r($sports);
echo"\n";
print_r($activities);
echo"\n";
echo $sports[2]."\n";
echo $activities['sky']."\n";
echo $activities[10]."\n";

echo array_key_exists(2, $sports)."\n"; // 1 = true
echo array_key_exists('sea', $activities)."\n";

//Check if value is in an array
$cities = ["London", "Milan", "Paris", "Sydney"];
echo in_array('Sydney', $cities)."\n";
echo in_array('Miln', $cities, true);//returns nothing = false