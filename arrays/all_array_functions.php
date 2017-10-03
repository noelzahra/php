<?php
//All array functions

//Arrays
$docs = ["PDF", "XLS", "DOC", "PSD"];
$appOpensDoc = array(
    "acrobat" => "PDF",
    "excel" => "XLS",
    "word" => "DOC",
    "photoshop" => "PSD"
);

//Inseting element
$docs[] = "JS";
foreach ($docs as $var)
{
    echo $var."\n";
}

//Searching in an array
$key = array_search("JS", $docs);
echo "\n$docs[$key] is at key $key\n\n";

foreach ($docs as $key => $doc) {
    echo "$doc = $key\n";
}

echo "\n";

//Sorting an array
sort($docs);

foreach ($docs as $doc) {
    echo $doc."\n";
}

echo "\nUsing asort for an associative array - sort by value\n";

asort($appOpensDoc);

foreach ($appOpensDoc as $key => $item) {
    echo "$item = $key\n";
}

echo "\nUsing ksort for an associative array - sort by key\n";
ksort($appOpensDoc);

foreach ($appOpensDoc as $key => $item) {
    echo "$key = $item\n";
}

echo"\nReverse an array\n";
rsort($docs);
foreach ($docs as $doc) {
    echo"$doc\n";
}

//Check if key exists
echo "\nCheck if item is in array\n";

$is_Key = array_key_exists("word", $appOpensDoc);
$boolVal = (bool)$is_Key;
echo $boolVal ? 'true' : 'false';
echo "\n";

$is_Key = array_key_exists("sierra", $docs);
$boolVal = (bool)$is_Key;
echo $boolVal ? 'true' : 'false';
echo "\n";

//count elements in array
echo "\nCount elements in array\n";
echo count($docs);

//remove element from array
echo "\n\nUnset elements in array\n";

unset($docs[2]);//removes PDF
foreach ($docs as $doc) {
    echo "$doc\n";
}