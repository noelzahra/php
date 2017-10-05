<?php

/* 
Stack methods for array FILO
 */

$a = [];

array_unshift($a, 'first');
array_unshift($a, 'second');
array_unshift($a, 'third');

var_dump($a);

array_shift($a); //removes last item added to array
var_dump($a);

/*
Queuemethid
  */
$queue = [];

array_unshift($b, 'first');
array_unshift($b, 'second');
array_unshift($b, 'third');

var_dump($queue);


