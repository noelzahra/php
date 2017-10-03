<?php
// Alternative syntax removes {} with : and end keyword

$authors = ["Ernest Hemingway", "Joseph Heller", "Mark Twain", "Michael Chabon", "Ayn Rand"];
$i = 0;

if (count($authors) > 0) :
    echo  "Total count: ". count($authors). " authors".PHP_EOL;
else :
    echo "There are no authors".PHP_EOL;
endif;

while (count($authors) > 0) :
    echo $authors[$i].PHP_EOL;
    $i++;
    break;
endwhile;

for ($i = 0; $i < count($authors); $i++) :
    echo "Index [".$i."] ".$authors[$i].PHP_EOL;
endfor;