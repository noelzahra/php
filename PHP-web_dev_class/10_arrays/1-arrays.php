<?php

//Arrays

$array = ['bus','plane', 'car', 'bike'];

var_dump($array);

$names = array(
    'teacher' => 'emanuel',
    'student' => 'noel',
    1 => 'isaac',
    1 => 'john',
    'joseph'
);

var_dump($names);

$a[4] = 'tony';
$a[] = 'joseph';
$a[] = 'eric';

var_dump($a);

foreach($a as $key=>$index) {
    echo $key . ' for ' . $index . '<br>';
}

$count = count($names);
echo $count;

echo nl2br('<br><br>');

$days = range(1, 31);
echo 'Days: ' . count($days);

$coorindates [4] [6] = 8;//row 4 col 6
var_dump($coorindates);

$row1 = [2, 4, 6];
$row2 = [4, 7, 9];
$row3 = [5, 8, 12];

$matrix = array($row1, $row2, $row3);
var_dump($matrix);


$matrix2 = [
    array(5, 6, 7),
    array(1, 2, 3),
    array(5, 8, 5)
];

var_dump($matrix2);

$output = $matrix2 [2] [1];
echo $output;

const GRID_Y = 3;

$matrix = array(
    array(0, 1, 1, 0, 0),
    array(1, 0, 0, 1, 1),
    array(1, 0, 1, 1, 1)
    );

    var_dump(count($matrix));// same as constant

function play($x, $y) {
    global $matrix;
    return $matrix[count($matrix) - $y][$x] === 1;
}

echo play(2, 1);

$b = array('abba', 'deef', 'trer');
$result = list($first, $second, $third) = $b;
var_dump($result);


//array_keys
$rows = array(
    array('name' => 'Scott', 'surname' => 'Zahra'),
    array('name' => 'Ruth', 'surname' => 'Mizzi' )
);

if(count($rows) > 0) {
    $firstRow = $rows[0];
    $headingRow = array_keys($firstRow);
    
    $csv[] = implode(',', $headingRow);
    
    foreach ($rows as $row) {
        $csv[] = implode(',', $row);
    }
    
    var_dump($csv);
};

$a = 'fsgsfggh';
$b = 'gdfhjkj';

$laravel = compact('a', 'b'); //reflection referign to var as a string

var_dump($laravel);

$numList = [1,2,3,4];

echo current($numList);
echo next($numList);
echo current($numList);