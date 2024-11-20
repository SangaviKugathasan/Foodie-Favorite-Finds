<?php

include('path/to/config.php');

// Define the SQL query for table creation
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    booking_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(id)
)";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'bookings' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
