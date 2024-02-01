<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Product data
$product_name = "Product Name";
$product_description = "Product Description";
$product_price = 100.00;
$product_category = "Product Category";

// Insert product into database
$sql = "INSERT INTO products (product_name, product_description, product_price, product_category)
VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssd", $product_name, $product_description, $product_price, $product_category);

if ($stmt->execute()) {
    echo "New product added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>