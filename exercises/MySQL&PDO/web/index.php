<?php
$host = $_ENV['DB_HOST'];
$pass = $_ENV['DB_PASS'];
$db = $_ENV['DB_NAME'];

$con = new mysqli($host, 'root', $pass, $db);

if ($con->connect_errno) {
    echo "Erro: " . mysqli_connect_error();
    exit;
}
$result = $con->query("SELECT * FROM people");
print_r($result);

$con->close();
