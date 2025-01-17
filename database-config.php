<?php
// Sample database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'example_db';
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';
?>