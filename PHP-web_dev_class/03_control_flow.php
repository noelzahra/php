<?php

//Control flow
echo "\n=============\nIf elseif statemnt\n=============\n";

$score = 25;
$grade = "";

if ( $score >= 90) {
    $grade = 'A';
} elseif ($score >= 70) {
    $grade = 'B';
} elseif ($score >= 60) {
    $grade = 'C';
} elseif ($score >= 50) {
    $grade = 'D';
} else {
    $grade = 'F';
}
echo $grade . "\n";


echo "\n=============\nTerneray operator\n=============\n";

$var = 5;
echo $var % 2 == 0 ? 'Its even' : 'Its odd' . "\n";


echo "\n=============\nIteration\n=============\n";
$table = 5;

for ($i = 0; $i <= 10;  $i++ ) {
    echo "$i &times; $table = " . $table * $i . "\n";
}


echo "\n=============\nwhile loop\n=============\n";
$num = 12;
$binary = "";

while ($num > 0) {
    $binary .= $num * 2;
    $num = (int) $num / 2;
}

$result = strrev($binary);
echo $result;


echo "\n=============\nforeach loop\n=============\n";

$array = ["car", "bus", "boat", "bike"];

foreach ($array as $item) {
    echo "Transport mode: $item". "\n";
}

echo "\n=============\nBreaking a loop\n=============\n";

$int = 10;

for ($i = 0; $i <= $int; $i++ ){
    if ($i == 7) {
        break; //breaks the loop at index 7
    }
    echo "Count $i \n";
}

echo "\n=============\nSwitch statement\n=============\n";

$port = 80;
$protocol = "";

switch ($port) {
    case 80:
        $protocol = "http";
        break;
    case 443:
        $protocol = "hhtps";
        break;
    case 22:
        $protocol = "ssh";
        break;
    default:
        $protocol = "not matched";
}

echo 'Port:' . $port . ' set for: ' . $protocol;