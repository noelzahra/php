<?php
/*
Anonymous functions or Lambda
Improve code readability
avoid polluting global namespace
*/

//Regular function - named
function message(){
    return "Hello from regular function\n";
}

echo message();

//Anonymous function vai variable
$anonFuncVar = function()
{
    return "Hello from anonymous function via variable\n";
};

echo $anonFuncVar();

//Anonymous function wrapped in another function
function printMessage($function)
{
    $function();
}

printMessage( function()
{
    echo "Hello from anonymous function from regular function";
});
