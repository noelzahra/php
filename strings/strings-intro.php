<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 04/08/2017
 * Time: 12:35
 */

    $sample = 'A penny saved is a penny earned.'; //Single quotes will not accept variables within string.
    echo $sample;

    echo "\n";

    $currency = "$";
    $sampleString = 'The best currency is $currency';
    $quotedString = "The best currency is the $currency";
    echo "Using single quotes will not pass $currency variable: ", $sampleString;
    echo "\n";
    echo "Passing $currency variable: ", $quotedString;

    $feastString = 'St.Patrick\'s day';
    echo "\n$feastString\n";

    //Double quotes

    $var2 = 2;
    echo "{$var2}nd place\n";

    $var3 = 3;
    echo $var3."rd place\n";