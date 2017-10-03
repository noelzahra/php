<?php
// Connect to mysql

$dbPassword = "orange21";
$dbUserName = "noel";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

print_r($connection);

($connection->connect_errno == 0) ?
    exit ("Database Connection succesfull: ".$connection->host_info) : exit ("Databse Connection Failed, Reason: ".$connection->connect_errno);

//$query = "DELETE FROM Authors WHERE id = 4";
//$query = "UPDATE Authors SET pen_name = 'L.M. Montgomery' WHERE id = 2";
$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Arthur Conan', 'Doyle', 'Sir Arthur Ignatius Conan Doyle')";

$connection->query($query);

$connection->close();