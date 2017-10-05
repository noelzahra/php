<?php
//JSON functions

$person = [
    "name"  => "Scott",
    "age"   =>  9,
    "eyes"  =>  "brown"   
];

echo json_encode($person) . "\n"; //JSON string

//JSON decode

$output = json_decode('{"name":"Scott"}', true);
echo $output["name"];