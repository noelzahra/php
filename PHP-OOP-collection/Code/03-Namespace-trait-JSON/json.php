<?php
//JSON functions

$person = [
    'name'      =>  'Scott',
    'email'     =>  'scott@gmail.com',
    'password'  =>  'nordkapp'
];

//output json from array
echo json_encode($person);

$json = '{"name" : "Pierre", "age" : 9 }';
$output = json_decode($json, true);
var_dump($output);
echo $output["name"];