<?php
// Connect to the database

$host = 'localhost';
$dbname = 'product_crud';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>