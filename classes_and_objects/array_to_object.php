<?php

/**
 * Converting an array to an object
 * with json_encode
*/

$array = ['items' => ['Milan', 'Flight', 2366, 3.5]];
var_dump($array);

$stringObject = json_encode($array);

var_dump($stringObject);


/**
 * json_encode creates a JSON string 
 * json-decode can foramt this into an object
*/

//with true param creates an array
$stringToArray = json_decode(json_encode($array), true);
echo 'Object from json_encode is transformed into an array';
var_dump($stringToArray);


//with flase param creates an object
$object = json_decode(json_encode($array), false);
$title = <<<TITLE

==========================
Object from json_encode is
transformed into an object
==========================

TITLE;

echo $title;
var_dump($object);

foreach($object->items as $item) {
    echo $item . "\n";
}