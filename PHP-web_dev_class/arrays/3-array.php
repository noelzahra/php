<?php

/* 
Sorting
 */

//sort() functions chnages an array permanently

$a = ['dog', 'cat', 'bird', 'zebra'];

var_dump($a);

asort($a);
var_dump($a);

rsort($a);
var_dump($a);

$compare = function ($s1, $s2) {
    
    if ($s1 > $s2){
        return 1;
    }
    
    if ($s1 < $s2) {
        return 0;
    }
    return -1;
};

$output = usort($a, $compare);

var_dump($output);


$row1 = array (
  'name' => 'Scott',
  'surname'=>'Zahra',
  'birthday' => 1997
);

$row2 = array(
  'name' => 'Pierrw',
  'surname'=>'Borg',
  'birthday' => 1990  
);

$row3 = array(
  'name' => 'Ruth',
  'surname'=>'Mizzi',
  'birthday' => 1975  
);

$rows = [$row1, $row2, $row3];

var_dump($rows);

//sort by ascending surnmae
echo 'sort by ascending surname';
usort($rows, function($row1, $row2){
    return strcasecmp($row1['surname'], $row2['surname']);
});

var_dump($rows);
echo 'sort by descending surname';
//sort by descending surnmae
usort($rows, function($row1, $row2){
    //- sign reverses comparison - sorts descending
    return -strcasecmp($row1['surname'], $row2['surname']);
});
var_dump($rows);

//sort by int
echo 'sort by int';

usort($rows, function($row1, $row2){
    if($row1['birthday'] > $row2['birthday']) {
        return -1;
    }
    if($row1['birthday'] < $row2['birthday']) {
        return 1;
    }
    return 0;
});
var_dump($rows);

$a = ['d1', 'd2'];
$b = ['name', 'surname'];

$output = array_merge($a, $b);
var_dump($output);
