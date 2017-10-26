<?php
/*
*Recursive function returns
*Fibonacci sequence
*/

function recursiveFib($n)
{
   switch($n)
   {
       case 0:
           return 0;
       case 1:
           return 1;           
       default :
           return recursiveFib($n - 1) + recursiveFib($n - 2);
   }
}

function makeFibArray($n)
{
    $array = [];

    for($i = 1; $i <= $n; $i++)
    {
        array_push($array, recursiveFib($i));
        //  array_push($array, recursiveFib($i));
    }
    return $array;
}

print_r(makeFibArray(8));


/*
*Iterative function returns
*Fibonacci sequence
*/

function iterativeFibSequence($n)
{
    $array = [1, 1];

    for($i = 1; $i < $n; $i++){
        $array[] = array_sum(array_slice($array, -2));
    }
    return $array;
}

$fibs = iterativeFibSequence(8);

foreach ($fibs as $key => $fib)
{
    echo "fib $key is $fib\n";
}