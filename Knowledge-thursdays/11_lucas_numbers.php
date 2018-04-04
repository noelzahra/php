<?php

function generateLucasArray($startingLucasNumber, $listLength)
{
    $lucasArray = [];

    //recursion to generate lucas numbers
    function recursion($n)
    {
       switch($n)
       {
           case 0:
               return 0;
           case 2:
               return 1;
           case 1:
               return 2;
           default :
               return recursion($n - 1) + recursion($n - 2);
       }
    }

    //pushing lucas numbers to empty array
    for($i = 1; $i <= $listLength + 1; $i++)
    {
        $value = recursion($i);
        $lucasArray[] = $value;
    }

    $key = array_search($startingLucasNumber, $lucasArray);

    //return $lucasArray;

    //getting a subset of lucasArray
    return array_slice($lucasArray, $key, count($lucasArray));
}

// var_dump(generateLucasArray(3, 2));
var_dump(generateLucasArray(3, 8));