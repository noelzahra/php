<?php

// Functions

echo "===============\nNamed function\n===============\n";
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    $result = ($num1 > $num2) ? $num1 - $num2 : $num2 - $num1 ;
    return $result;
}
echo add(6, 4) . "\n";
echo subtract(9, 12) . "\n";

echo "\n=============================================\nAnonymnous funcs or Lambda calling named func\n=============================================\n";
//anonymolus function

function my_each ($array, $operation) {
  $newArray = [];
  foreach ($array as $value) {
    $newArray[] = $operation($value);
    }
    return $newArray;
}

$arr = [5, 6, 7, 8, 3, 6, 78, 8, 4, 34 ];
$newArray = my_each($arr, function($arr){
    //within scope lambda
   return $arr + 5; 
});

var_dump($newArray);

echo "\n=============================================\nAnonymnous funcs called within \$newArray \n=============================================\n";

//Anonymous func $double
$double = function($element){
    return $element * 2;
};

$newArray2 = my_each($arr, $double);
var_dump($newArray2);
       
echo "\n=============================================\nAnonymnous funcs called as a string var \$newArray \n=============================================\n";
function square($n) {
    return $n * $n;
}

$newArray3 = my_each($arr,'square');
var_dump($newArray3);

//map function
var_dump(array_map('square', $arr));


echo "\n=============================================\nAnonymnous funcs are vars and need to be called after assigned\n=============================================\n";

echo func1();

function func1 () {
    echo "From function 1" . "\n";
}


$func2 = function() {
    echo "from function 2" . "\n";
};

echo $func2();
