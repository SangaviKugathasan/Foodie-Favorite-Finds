<?php

// Include your configuration file
include('path/to/config.php');

// Define the SQL query for table creation
$sql = "CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    message TEXT
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'contact_messages' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
