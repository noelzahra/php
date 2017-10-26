<?php

//incrementByN function

function incrementByN($number) {

   return function($N) use($number) {
        return $number + $N;
    };
}

$result = incrementByN(5);

echo $result(5) . "\n";
echo $result(10);