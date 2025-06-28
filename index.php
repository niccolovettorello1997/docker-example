<?php
$host = 'db';
$db   = 'testdb';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connection to DB succeeded.<br>";

    // Create table if it does not exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL
    )");
    
    // Clean table every time
    $pdo->exec("TRUNCATE TABLE users");

    // Add example user
    $pdo->exec("INSERT INTO users (name) VALUES ('Alice')");

    // Retrieve users
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll();

    echo "<h3>Users:</h3>";
    foreach ($users as $user) {
        echo "- " . htmlspecialchars($user['name']) . "<br>";
    }

} catch (\PDOException $e) {
    echo "DB error: " . $e->getMessage();
}

