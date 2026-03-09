<?php
// config.example.php
// Rename this to config.php and fill your DB details

$host = 'your_host';
$db   = 'your_db';
$user = 'your_user';
$pass = 'your_pass';
$charset = 'utf8mb4';

// Example PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Database connection failed: ".$e->getMessage();
}
?>