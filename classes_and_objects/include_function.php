<?php
// Include other Classes php files

include_once 'Author.php';

$newAuthor = new Author("Ernest", "Hemingway", "Champ");
echo $newAuthor->getPenName().PHP_EOL;
echo $newAuthor->getFullName().PHP_EOL;
echo $newAuthor->getCompleteName();