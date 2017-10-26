<?php

$today = date("Y/m/d");

$output = <<<DATE
    <html>
        <head>
            <title>$today</title>
        </head>
        <body>
           <h1 style="font:52px 'Arial', sans-serif; text-align: center;">Today's date is $today</h1>
        </body>
    </html>
DATE;

echo $output;
