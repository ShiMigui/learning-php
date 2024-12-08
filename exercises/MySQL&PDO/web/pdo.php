<?php
$host = $_ENV['DB_HOST'] ?? 'localhost';
$user = $_ENV['DB_USER'] ?? 'root';
$pass = $_ENV['DB_PASS'] ?? '';
$db = $_ENV['DB_NAME'];

try {
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}