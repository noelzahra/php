<?php

$names = ['scott', 'pierre', 'sydney', 'scott'];
var_dump($names);


$people = [
    [   'id'        => 1,
        'username' => 'scott',
        'email'     => 'scott@gmail.com'
    ],
    [
        'id'        => 2,
        'username' => 'pierre',
        'email'     => 'pierre@gmail.com'
    ],
    [
        'id'        => 3,
        'username' => 'sydney',
        'email'     => 'sydney@gmail.com'
    ]
];


foreach ($people as $key => $user) {
    $username = $user['username'];
    $email = $user['email'];
    echo $username . ' email: ' . $email . "\n";
}

//Counting

$count = count($people);
echo $count . "\n";

$array_count = array_count_values($names); //count each time a value occur
var_dump($array_count);