<?php
$host = $_ENV['DB_HOST'] ?? 'localhost';
$user = $_ENV['DB_USER'] ?? 'root';
$pass = $_ENV['DB_PASS'] ?? '';
$db = $_ENV['DB_NAME'];

try {
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt = $con->prepare("CALL insert_people(:nome, :email);");
    $nome = "Lorem ipsum";
    $email = "loremipsum@gmail.com";
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $con->query("SELECT nm_people, nm_email FROM people");

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) echo $row['nm_people']. " - ". $row['nm_email']. "<br>";

    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
