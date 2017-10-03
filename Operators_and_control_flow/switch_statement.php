<?php
//switch statement

$authors = ["Ernest Hemingway", "Ayn Rand", "Harper Lee", "Joseph Heller" ];
$count = count($authors);

switch ($count) {
    case 0:
        echo "There are no authors";
        break;
    
    case 1:
        echo "There is one author";
        break;
    
    case ($count > 1):
        echo "There are $count authors";
        break;

    default:
        echo "There are more than 4 authors";
        break;
}