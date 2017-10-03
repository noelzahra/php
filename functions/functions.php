<?php
/* Functions - intro
function createName($param1, $param2){
    perform function
};*/

    function listOfBooks ()
    {
        echo "Hamlet\n";
        echo "Catch 22";
    }

    listOfBooks();

    function bookByAuthorYear ($authorName, $year)
    {
        echo "$authorName was published in $year";
    }

    $authorName = "William Shakespeare";
    echo "\n";
    bookByAuthorYear($authorName, 1600);

    function sum ($var1, $var2)
    {
        return $var1 + $var2;
    }

    $var1 = 5;
    $var2 = 9;
    echo "\n", sum($var1, $var2);

    function multiply ($var1, $var2)
    {
        return $var1 * $var2;
    }

    $var4 = 10;
    $var3 = 2;
    echo "\n", multiply($var3, $var4);

    function divide($var1, $var2)
    {
        return $var1 / $var2;
    }

    echo "\n", "Result is ".divide($var4, $var3);

    function modulus($var1, $var2) {
        return $var1 % $var2;
    }

    echo "\n", "Modulus is ".modulus($var4, $var3);
    echo "\n";

//setting a default param in the function
    function publicationByDate($publication, $tempYear = 2008)
    {
        echo "$publication published in $tempYear";
    }

    $publication = "Harry Potter";
    publicationByDate($publication);

//Variable functions
    function getName () {
        echo "Scott";
    }

    $variableFunctionName = "getName";
    echo "\n";
    $variableFunctionName();