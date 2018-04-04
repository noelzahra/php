<?php

//Towers of hanoi

function moveDisks(int $numberOfDisks)
{
    $pegA = [];
    $pegB = [];
    $pegC = [];

    for($i = 1; $i <= $numberOfDisks; $i++)
    {
        array_unshift($pegA, $i);
    }

    $n = $pegA[0];

    function recursion($from, $to, $using, $n) 
    {
        if ($n <= 1) {
            echo "Move disk $n from pole $from to pole $to \n";
        } else {
            recursion($from, $using, $to, $n - 1);
            echo "Move disk $n from pole $from to pole $to \n";
            recursion($using, $to, $from, $n - 1);
        }
    }

    recursion('A', 'C', 'B', $n);
}

moveDisks(5);