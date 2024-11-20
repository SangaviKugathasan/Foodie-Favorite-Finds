<?php

// Include your configuration file
include('path/to/config.php');

// Define the SQL query for table creation
$sql = "CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    order_date DATE,
    total_amount DECIMAL(10, 2),
    status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'orders' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
