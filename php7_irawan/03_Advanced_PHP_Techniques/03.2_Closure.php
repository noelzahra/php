<?php
/*
Closures
Are anonymous functions accessing vars
imported from outside scope
they do not modify the original value
*/

$counter = 0;

//pass counter into closure
$closure = function() use ($counter) {
    return "Closure increment: " . ++$counter . "\n";
};

echo $closure(); //increements counter to 1
echo "Global var unchnaged with closure: " . $counter . "\n"; //closure can't modify the global var, remians 0


//adding &to global var in closure
$incrementClosure = function() use (&$counter) {
    return "Closure increment: " . ++$counter . "\n";
};

echo $incrementClosure();
echo "Global var chnaged by closure using &\$counter: " .$counter . "\n";;