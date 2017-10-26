<?php

$today = date("Y/m/d");

$output = <<<DATE
    <html>
        <head>
            <title>$today</title>
        </head>
        <body>
            <h1>Today's date is $today</h1>
        </body>
    </html>
DATE;

echo $output;
