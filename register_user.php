<?php

include('path/to/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["reg_username"];
    $email = $_POST["reg_email"];
    $password = $_POST["reg_password"];

    // Validate inputs (add more validation as needed)
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Perform registration logic here using prepared statements and password hashing
    // For simplicity, you can insert data into the 'users' table

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        // Registration successful, redirect or provide a link to proceed
        header("Location: login.php");
        exit;
    } else {
        // Registration failed, log the error details
        error_log("Registration failed. Error: " . $stmt->error);
        echo "Registration failed. Please try again later.";
    }

    $stmt->close();
}

$conn->close();

?>
