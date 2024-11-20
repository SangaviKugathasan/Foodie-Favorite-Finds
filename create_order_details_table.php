<?php

// Include your configuration file
include('path/to/config.php');

// Define the SQL query for table creation
$sql = "CREATE TABLE IF NOT EXISTS order_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'order_details' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
