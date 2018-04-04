<?php

//Sieve of Eratosthenes

function findLargestPrime($largestNumber): array
{    
     $number = 2;
     $range = range(2, $largestNumber);
     $primes = array_combine($range, $range);
     
    
     // Loop through the array and remove the multiples from the primes array.
     while ($number*$number <= $largestNumber) {
       for ($i = $number; $i <= $largestNumber; $i +=$number) {
         if ($i == $number) {
           continue;
         }
         unset($primes[$i]);
       }
       $number = next($primes);
     }

    return $primes;
    //return end($primes);
   }

  var_dump(findLargestPrime(100));

/**
 * study array function: 
 * end, next, current, reset, prev, each,
 */
   