<?php
//spaceship operator

$scores = [80, 30, 90, 70 ];

usort($scores, function($score1, $score2){
    if ($score1 === $score2)
    {
        return 0;
    }
    //ascending order
    return $score1 < $score2 ? -1 : 1;

    //descending order
    //return $score2 < $score1 ? -1 : 1;
});

var_dump($scores);

/*
Rule for spaceship operator
If both operands are equal returns 0
If left operand is bigger returns 1
if right operand is bigger returns 2
*/

echo "Both operands equal: ";
echo 1 <=> 1;
echo "\nWith floats:";
echo 1.2 <=> 1.2;
echo "\nWith strings according to alphabetical order:";
echo 'a' <=> 'a';
echo "\nWith arrays according to elements order:";
echo [1, 2, 3] <=> [1, 2, 3];

echo "\n\nLeft operand is bigger: ";
echo 2 <=> 1;
echo "\nWith floats:";
echo 2.618 <=> 2.617;
echo "\nWith strings:";
echo 'b' <=> 'a';
echo "\nWith arrays:";
echo [3, 4, 6] <=> [3, 4, 5];

echo "\n\nRight operand is bigger: ";
echo 2 <=> 3;
echo "\nWith floats:";
echo 2.617 <=> 2.618;
echo "\nWith strings:";
echo 'a' <=> 'b';
echo "\nWith arrays:";
echo [3, 4, 5] <=> [3, 4, 6];

echo "\n\n==================\nUsing spaceship opertor with usort\n==================\n";
$scoresArray = [80, 30, 90, 70];

usort($scoresArray, function($score1, $score2){
    //ascending order
    //return $score1 <=> $score2;

    //descendoing order
    return $score2 <=> $score1;
});

var_dump($scoresArray);