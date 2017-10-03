<?php

//Strings

$a = [3, 5, 6, "string"];

//var_dump($a);


//Heredoc, equivalent to double quote
$str = <<<EOD
        This is a heredoc
EOD;

echo $str . "\n";
//Nowdoc, equivalnet to single quote string

//var_dump echo returns 1
//var_dump(echo $str);

echo "\n=================\nUsing printf formatter\n=================\n";

$currency = "$";
$value = 1203.6678;

printf("Total:%s%5.2f\n", $currency, $value) . "\n\nngyt";

$string = "String is an array";

for ($i = 0; $i < strlen($string); $i++) {
    echo $string[$i] . "\n";
}


$comment = <<<CONTENT
        <html>
        <body>
        <h1>This is the main title</h1>
        <p>Content for story</p>
        </body>
        </html>
CONTENT;

echo strip_tags($comment);


//String comparison
$s1 = "Def";
$s2 = "abc";


var_dump (strcmp($s2, $s1)) . "\n";



$str1 = "abc10000";
$str2 = "abc20";

var_dump(strcmp($str2, $str1)) . "\n"; //true abc20 comes before abc10000 in numerical order
