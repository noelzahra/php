<?php
//closure

$counter = 0;

$closure = function() use ($counter) {
    return ++$counter;
};

echo $closure() . "\n";
echo $counter . "\n";

$anotherClosure = function() use(&$counter) {
    return ++$counter;
};

echo $anotherClosure() . "\n";
echo $counter . "\n";

//Closure as array functions
$scores = [50, 30, 10, 90, 80];

$result = array_filter($scores, function($score){
            return $score >= 50;
});

var_dump($result);

function multiplyByN($n) {
    return function($num) use ($n) {
        return $num * $n;
    };
}

$output = array_map(multiplyByN(5), $scores);

var_dump($output);