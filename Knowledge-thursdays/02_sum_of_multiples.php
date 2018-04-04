<?php


function Factorial($MaxFacor)
{
    $array = [];
    for ($i = 1; $i <= $MaxFacor; $i++) {
        switch($i) {
            case ($i % 4 === 0):
                $array[] = $i;
                break;
            case ($i % 6 === 0):
                $array[] = $i;
                break;
            case ($i % 12 === 0):
                $array[] = $i;
        };
    }
    //var_dump($array);
    return (array_sum($array) - $MaxFacor);
}


echo Factorial(24);