<?php
// Strings

$currency = ["dollar", "sterling", "euro" ];

foreach ($currency as $value) {
    print "A $value saved is a $value earned.\n";
}


//String functions
echo "\n===============\nString functions\n===============\n";

$string = "to be or not ot be, that is the question.";

$stringCapitalized = strtoupper($string);
echo $stringCapitalized . "\n";

$stringToLowerCase = strtolower($stringCapitalized);
echo $stringToLowerCase . "\n";

$stringFirstLetterCapitalize = ucfirst($stringToLowerCase);
echo $stringFirstLetterCapitalize . "\n";

$length = strlen($string);
echo "String length: " .  $length . "\n";


//String split
echo "\n===============\nString split\n===============\n";
$quote = "In the middle of difficulty lies opportunity";
$array = str_split($quote, 10);
foreach($array as $value) {
    echo $value . ",\n";
}

$shuffle =  str_shuffle($quote);
echo $shuffle . "\n";

//String position
echo "\n\n===============\nString position\n===============\n";
$position = strpos($quote, "of", 5);
echo $position;

//Sub-String fucntion
echo "\n\n===============\nSub-String fucntion\n===============\n";
$extract = "Only those who will risk going too far can possibly find out how far one can go.";
echo substr($extract, 5, 20);

//String replace
echo "\n\n===============\nString replace\n===============\n";
$initialString = "You should eat fruits, vegetables, and fiber every day";
$healthy = ["fruits", "vegetables", "fiber"];
$yummy = ["pizza", "beer", "ice cream"];

$newString = str_replace($healthy, $yummy, $initialString);
echo $newString;

