<?php

$servername = "localhost";
$username = "root";
$password = "";  // Use your actual database password
$dbname = "ecommerce_db";  // Use your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your SQL query
$sql = "SELECT * FROM users";  
$sql = "SELECT * FROM bookings";
$sql = "SELECT * FROM contact_messages";
$sql = "SELECT * FROM orders";
$sql = "SELECT * FROM order_details";
$sql = "SELECT * FROM products";

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Fetch data or perform other operations
while ($row = $result->fetch_assoc()) {
    // Process each row of data
    print_r($row);
}

// Free up resources
$result->free_result();

// Close connection
$conn->close();

?>
