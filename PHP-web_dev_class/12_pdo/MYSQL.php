<?php

//
if(! $connection = mysqli_connect('localhost', 'root', ''))
{
    echo 'Error connecting to DB';
    die();
}

if(! mysqli_select_db($connection, 'basicaccounting')){
    echo 'Error selecting DB';
    die();
}

$query = 'SELECT * FROM client';
if(!$result = mysqli_query($connection, $query)){
    echo 'Error running query';
    die();
}

//first row
$row = mysqli_fetch_assoc($result);
$header = array_keys($row);
echo implode($header, ' | ') . '<br>';
echo implode(array_values($row), ' , ') . '<br>';

//output csv
while ($row = mysqli_fetch_assoc($result)) {
    echo implode(array_values($row), ' , ') . '<br>';    
    $rows[] = $row;
}

//output array key->value
while($row = mysqli_fetch_object($result)) {
    $rows [] = $row;
    echo $row->name;
 }
 
 var_dump($rows);