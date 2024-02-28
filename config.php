<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Batatinha123,456';
$dbName = 'notas';


try {
    $pdo = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo ('erro: ' . $erro->getMessage());
}
