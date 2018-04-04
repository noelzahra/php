<?php


$pegA = [5, 4, 3, 2, 1];
$pegB = [];
$pegC = [];

$n = max($pegA);

function move_disk($from, $to, $using, $n) 
{
   if ($n <= 1) {
      echo "Move disk $n from pole {$from} to pole {$to} \n";
   } else {
      move_disk($from, $using, $to, $n - 1);
      echo "Move disk $n from pole {$from} to pole {$to} \n";
      move_disk($using, $to, $from, $n - 1);
   }
}

move_disk('A', 'C', 'B', $n);
