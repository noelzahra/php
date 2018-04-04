<?php

//Loop
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

for($i = 0; $i <= count($people) - 1; $i++)
{
    $string = $people[$i]['username'];
    $email = $people[$i]['email'];
    echo $string . ' email: ' . $email . "\n";
}

echo "=========\n";

$planes = [
    [
        'id'    =>  1,
        'model' =>  'BeechCraft Baron G50',
        'specs' => [
            'range'     =>  1400,
            'engines'   =>  2,
            'altitude'  => 40000
        ]
    ],
    [
        'id'    =>  2,
        'model' =>  'Diamond d64',
        'specs' => [
            'range'     =>  1100,
            'engines'   =>  2,
            'altitude'  => 25000
        ]
    ]
];


foreach($planes as $plane)
{
    echo $plane['model'] . "\n";
    foreach ($plane['specs'] as $key => $value) {
        echo "\t" . $key . ' : ' . $value  . "\n";
    }
    echo "=========\n";
}

//Searching inside an array and get out of loop

$subscribers = [
    [
        'id'    => 1,
        'user'  => 'Noel',
        'email' => 'noel@gmail.com',
    ],
    [
        'id'    => 2,
        'user'  => 'Elon',
        'email' => 'elon@gmail.com',
    ],
    [
        'id'    => 3,
        'user'  => 'Larry',
        'email' => 'larry@gmail.com',
    ],
    [
        'id'    => 4,
        'user'  => 'Jeff',
        'email' => 'jeff@gmail.com',
    ]
];

$search = 'Jeff';
$isSubscribed = false;

foreach ($subscribers as $key => $member) {
    if($member['user'] === $search)
    {
        $isSubscribed = $member;
        break; //stops the loop once $member is found
    }
}

var_dump($member);

$newMembers = [];

//Looping through array and find person by reference
foreach($people as $person)
{
    $person['username'] = 'George';
    $newMembers[] = $person;
}

var_dump($newMembers);



$tweet = [
    'status'    => 200,
    ['text'      => 'Go long ATOM'],
    ['text'      => 'Add to MULE position']
];

foreach($tweet as $key => $value)
{
    if($key === 'status')
    {
        continue;
    }

    echo "\n200 successful:\n" . $value['text'] . "\n";
}

$numbers = [1, 2, 3, 4, 5];

//Pass by reference
foreach ($numbers as &$number) {
    $number = $number * 2;
    unset($number);
}

var_dump($numbers);

foreach ($numbers as $number) {
    var_dump($number);
}