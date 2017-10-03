<?php
//Operators
    $http = 80;
    $protocol = $http;
    
    $array = [1, 3, 4, 6];
    $newArray = [34, "bill", true]; 
    
    const PI_CONSTANT = 3.1456; 
    
    $num1 = 4;
    $num2 = 6;
    $string1 = "abc";
    $string3 = "bcd";
    $var1 = 1;
    $var2 = "1";
    $var3 = 5;
    $var4 = 5.0;
    
    $year = 1996;
    $isLeapYear = ($year % 400 === 0) || 
            ($year % 4 === 0 && $year % 100 === 0 );
    

    echo "variable variables \$\$var: $$protocol \n";
    var_dump($array) . "\n";
    print_r($newArray);
    
    echo "\n=============\nConstants\n=============\n";
    print_r(PI_CONSTANT);
    echo "\n";
    
    var_dump($num1 > $num2);
    echo "\n";
    
    var_dump($string1 < $string3);
    echo "\n";
    
    echo "\n=============\nChecking value and type\n=============\n";
    echo "Checking value and type: int and string\n";
    var_dump($var1 == $var2);
    var_dump($var1 === $var2);
    echo "\n";
    
    var_dump($var3 == $var4);
    echo "Checking value and type: int and float\n";
    var_dump($var3 === $var4);
    
    echo "\n=============\nLogical operations: Checking leap year\n=============\n";
    var_dump($isLeapYear);
