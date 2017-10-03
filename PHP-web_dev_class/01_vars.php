<?php
    $message = "This is my first programme";
    $result = 2 * 3;
    
    
    function outputResult($var1, $var2)
    {
        echo "$var1 scored: $var2 \n";
    }
    outputResult($message, $result);

    $fib = 2.618;
    $convert = (int)$fib;

    echo "Type cast $fib double to int with (int): " . $convert;