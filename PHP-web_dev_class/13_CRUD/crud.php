<?php

/*
 *Postgres use "" for column only 
 *Use '' for strings
*/

$host = 'localhost';
$databaseName = 'basicaccounting';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host=$host;dbname=$databaseName";

try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$sql = 'INSERT INTO client (name, surname) VALUES (:name, :surname)';
$ps = $pdo->prepare($sql);

$ps->bindParam(':name', $name, PDO::PARAM_STR);
$ps->bindParam(':surname', $surname, PDO::PARAM_STR);

$name = 'Emanuel';
$surname = 'Calleja';

$ps->execute();

$name = 'Ephraim';
$surname = 'Calleja';

$ps->execute();
    
} catch (Exception $ex) {
    echo $ex ->getMessage();
}