<?php
// Array with a key value pair: "this string" =>(refers) "value"
// Each ley refers to a specific value

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "TS Eliot",
    "Mark Twain"
);

print_r($authors);
echo $authors['poetic'];

foreach($authors as $key => $value) {
    echo $value, $key;
}