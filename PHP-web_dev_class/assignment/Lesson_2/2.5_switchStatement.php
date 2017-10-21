<?php
//Switch statement

function ordinal($n){
    if ($n > 0 && $n <= 31)
    {
        switch ($n) {
            case 1:
            case 21:
            case 31:
                echo $n .'st';
                break;
            case 2:
            case 22:
                echo $n . 'nd';
                break;
            case 3:
            case 23:
                echo $n . 'rd';
                break;   
            default:
                echo $n . 'th';
        }
    }
}

//Testing switch statment
$numArray = [1, 2, 3, 4, 11, 12, 13, 21, 22, 23, 31];

foreach ($numArray as $value) {
    echo ordinal($value) . "\n";
}