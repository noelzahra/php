<?php
/*
PCRE regex
Describe a text pattern
Use regex101.com
*/

$number = "0 to 9";
$characters = "a to z, A to Z";
$symbol = "@, !, #, %, etc";
$metacharacters = "][ * . + ? \ ^ $ | )(";

//Basic characters are matched literally
echo "Regex Number format: " . $number . "\n";
echo "Regex Character format: " . $characters . "\n";
echo "Regex Symbol format: " . $symbol . "\n";

//Charactee classes
echo "\n============================\nCharacter set Matches only\none character in character set:\n===========================\n";

echo "Regex Metacharacters format: " . $metacharacters . "\n\n";
$charMatch = "[abc]"; //matches a char a, b or c
$rangeMatch = "[a-z]"; // matches a char range
$caseMatch = "[a-zA-Z]"; //matches luwercase, uppercase
$numberMatch = "[0-9]"; //matches number range
$excludeMatch = "[^abc]"; //exclude abc from match

echo "Character match: $charMatch\n";
echo "Character rnage match: $rangeMatch\n";
echo "Macth lowercase, uppercase $caseMatch\n";
echo "Number match: $numberMatch\n";
echo "Exclude chars from match: $excludeMatch\n";

//Shorthand classes
echo "\n============================\nShorthand Classes:\n===========================\n";
$numShorthand = "\d"; //matches any digit, same as [0-9]
$wordShorthand = "\w"; //matches ant word char, same as [a-zA-Z0-9_]
$whitespace = "\s"; //matches whitespace
$negationD = "\D"; // negation of \d
$negationW = "\W"; //negation of \w
$negationS = "\S"; //negation of \s

echo "Matches any digit, same as [0-9]: $numShorthand\n";
echo "Matches ant word char, same as [a-zA-Z0-9_]: $wordShorthand\n";
echo "Matches whitespace: $whitespace\n";
echo "Negation of \d: $negationD\n";
echo "Negation of \w: $negationW\n";
echo "Negation of \s: $negationS\n";

//Dot character
echo "\n==========\nDot char:\n==========\n";
//Matches any char but nota new line
echo  "Matches any char but nota new line: [0-9.a-z]";

//using parenthesis
echo "\n\n======\nGroup:\n======\n";
$group = "(hello)";
echo "Using parenthesis to capture subtext: " . $group . "\n";

//Alternation
echo "\n==========\nAlternation:\n==========\n";
$alternate = "alpha|beta";
echo "Match either left or right of pipe: $alternate\n";
$alternateGroup = "(mon|tues|sun)day";
echo "Match either left or right of pipe in group and day: $alternateGroup\n";

//Quantifiers
echo "\n==========\nQuantifiers:\n==========\n";
//Define occurancies
$macthN = "{n}"; //Matches n times
$matchNorMore = "{n,}"; //Match n or more
$matchNtoM = "{n.m}"; //Match n to m times
$matchZeroorMore = "*"; //zero or more match
$matchZeroOrOne = "?"; //zero or one match
$matchOneorMore = "+"; //one or more match

//Anchors
echo "\n==========\nAnchors:\n==========\n";
//match position
$startPosition = "^"; //start position
$endPosition = "$"; //End position
$caseInsensitive = "/i"; //Case insensitive maych
$global = "/g"; //Everywhere match
$multiline = "/m"; //Multiline match

echo "Start match from: $startPosition\n";
echo "Match end of text: $endPosition\n";

//Regex functions
echo "\n==========\nRegex functions:\n==========\n";

function validateEmail($text) {
    $emailPattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\,_-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";

    if (preg_match($emailPattern, $text)) {
        return true;
    }

    return false;
}

var_dump(validateEmail('user@gmail.com'));
var_dump(validateEmail('notemail'));


function numberValidate($text) {
    $numberPattern = "/\d/";

    if (preg_match($numberPattern, $text)) {
        return true;
    }

    return false;
}

var_dump(numberValidate("1458"));
var_dump(numberValidate("not a number"));
