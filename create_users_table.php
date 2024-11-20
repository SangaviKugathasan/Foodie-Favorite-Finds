<?php

// Include your configuration file
include('path/to/config.php');

// Define the SQL query for table creation
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
