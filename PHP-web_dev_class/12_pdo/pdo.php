<?php

/* 
 * PDO key, value pairs 
 *  */

//Throwing an error

function test($param1 =  false) {
    if(!$param1){
        throw new Exception('Parameter 1 missing');
    }
}

try {
    test();
} catch (Exception $ex) {
    $line = $ex->getLine();
    echo $ex->getMessage() . ' at line ' .$line . '<br><br>';
}

$host = 'localhost';
$databaseName = 'basicaccounting';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host=$host;dbname=$databaseName";

try{
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    foreach($pdo -> query('SELECT name FROM client')as $record) {
        echo $record['name'] . '<br>';
    };
    
    //prepared sattement
    $ps = $pdo->prepare('SELECT * FROM client WHERE id = ?');
    $ps->execute(array(2));
    
    echo '<br>PS Output:<br>';
    
    foreach ($ps->fetchAll() as $record) {
        var_dump($record);
    }
    
} catch (Exception $ex) {
    $line = $ex->getLine();
    echo $ex->getMessage() . ' at line ' .$line;
}