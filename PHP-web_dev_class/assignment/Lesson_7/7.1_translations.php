<?php

$localizedStringsArray = array (
    'good morning'  => 'buongiorno',
    'thank you'     => 'grazie',
    'goodbye'       => 'arrivederci',
    'welcome'       => 'benvenuto',
    'we missed you' => 'ci sei mancato'
);

function translateToItalian($array, $key)
{
    $key = strtolower($key);
    return array_key_exists($key, $array) ? $array[$key] : 'Non lo so';
}

$italian = translateToItalian($localizedStringsArray, 'Welcome');
$greeting = translateToItalian($localizedStringsArray, 'Bye');
echo $italian . "\n";
echo $greeting;
