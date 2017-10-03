<?php
//PHP array function requiring callback

$scores = [20, 30, 50, 76, 98, 100];

$result = array_filter($scores, function($score) {
    return $score > 50;
});

function multiplyByN($n) {
    return function($num) use($n) {
        return $num * $n;
    };
}

$output = array_map(multiplyByN(2), $scores);

print_r($result);
print_r($output);