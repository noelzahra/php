<?php

/* 
Array hihger level functions
 */

$row1 = array (
  'name' => 'Scott',
  'surname'=>'Zahra',
  'birthday' => 1997
);

$row2 = array(
  'name' => 'Pierre',
  'surname'=>'Borg',
  'birthday' => 1990  
);

$row3 = array(
  'name' => 'Ruth',
  'surname'=>'Mizzi',
  'birthday' => 1975  
);

$rows = [$row1, $row2, $row3];

$filteredOutput = array_filter($rows, function($row){
    return $row['birthday'] > 1990;
});

var_dump($filteredOutput);

//Array filter check if name exists
$exists = array_filter($rows, function($row){
    return $row['name'] == 'Pierre';
});

var_dump($exists);

//Array filter ints greater than 3
$input = [1, 2, 3, 4, 5, 6];

function criteriaGreaterThan($min) {
  return function($item) use ($min) {
    return $item > $min;
  };
}

$filtered = array_filter($input, criteriaGreaterThan(3));
print_r($filtered);

//array filter even only
$even = array_filter($input, function($item){
  return ($item % 2) == 0;
});

print_r($even);

//array filter odd
$odd = array_filter($input, function($item){
  return ($item % 2) != 0;
});

print_r($odd);

//Array map - apply a change to the value referenced by the key
$mapped = array_map(function($row) {
   $row['name'] = 'Kim';
   return ($row);
}, $rows);

var_dump($mapped);

$listName = array_map(function($row){
    return $row['name'];
}, $rows);

var_dump($listName);


//Array union - removes duplicates

$a = ['a', 'b', 'c'];
$b = ['c', 'd', 'e'];

$intesecet = array_intersect($a, $b);
var_dump($intesecet);

function arrayUnion($a, $b) {
  return array_unique(array_merge($a, $b));  
}

var_dump(arrayUnion($a, $b));
