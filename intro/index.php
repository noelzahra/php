<?php
    $message = 'Hello world';
    echo "This is my first php script ". $message;

    function login($name, $password) {
        echo 'Login succesfull '.$name.' with '.$password;
    };


    echo"\n";

    $name = "Noel";
    $password = "LetMeIn";
    login($name, $password);

    echo"\n";

    function whichNum($var1, $var2) {
        echo $var1 <=> $var2;
    };

    $var1 = 5;
    $var2 = 6;
    whichNum($var2, $var1);

    echo"\n";

    $var3 = 20;
    $var4 = 40;
    whichNum($var3, $var4);

    echo"\n";

    whichNum($var1, $var1);