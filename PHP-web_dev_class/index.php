<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Hello world</title>
        <?php
            $message = "This is my first programme";
            $result = 2 * 3;
            
            
            function outputResult($var1, $var2)
            {
                echo "$var1 scored: $var2";
            }
            
            $fib = 2.618;
            $convert = (int)$fib;
        ?>
    </head>
    <body>
        <h1>Hello world</h1>
        <div>
        <?php
            outputResult($message, $result);
            echo "<br >";
            echo "Type cast $fib double to int with (int): " . $convert;
        ?>
        </div>
    </body>
</html>
