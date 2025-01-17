<?php
// Simple PHP form handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    echo 'Thank you, ' . htmlspecialchars($name) . '! We will contact you at ' . htmlspecialchars($email);
}
?>