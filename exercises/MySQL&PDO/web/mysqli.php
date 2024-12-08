<?php
$host = $_ENV['DB_HOST'];
$pass = $_ENV['DB_PASS'];
$user = 'root';
$db = $_ENV['DB_NAME'];

$con = null;

try {
    $con = new mysqli($host, $user, $pass, $db);

    if ($con->connect_errno) {
        throw new Exception("Failed to connect to database: " . $con->connect_error);
    }

    $query = "SELECT nm_people, nm_email FROM people ORDER BY nm_people";
    $result = $con->query($query);

    if (!$result) {
        throw new Exception("Query failed: " . $con->error);
    }

    // Getting people, one by one
    while ($row = $result->fetch_assoc()) echo htmlspecialchars($row['nm_people'] . " (" . $row['nm_email'] . ")") . "<br/>";

    $query = "INSERT INTO people(nm_people, nm_email, nm_query) VALUES(?, ?, ?);";
    $stmt = $con->prepare($query);

    if (!$stmt) {
        throw new Exception("Failed to prepare statement: " . $con->error);
    }

    $email = "test@gmail.com";
    $name = "test";
    $query_string = "$name $email";

    $stmt->bind_param("sss", $name, $email, $query_string);
    $stmt->execute();

    if ($stmt->error) {
        throw new Exception("Failed to execute statement: " . $stmt->error);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    if ($con) {
        $con->close();
        return;
    }
}
