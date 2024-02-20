<?php
define('DB_NAME', 'web');
define('DB_USER', 'root2');
define('DB_PASSWORD', '12345');
define('DB_HOST', 'db');
define('DB_PORT', "3306");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>