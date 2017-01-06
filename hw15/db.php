<?php

try {
    $serverHost = 'localhost';
    $database = 'forum';
    $username = 'root';
    $password = '';
    $connectionString = "mysql:host=$serverHost;dbname=$database";
    $connection = new PDO($connectionString, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
