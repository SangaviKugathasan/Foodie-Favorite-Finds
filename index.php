<?php
include('path/to/config.php');
// Handle user registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    include 'register.php';
}

// Handle user login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    include 'login.php';
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your E-Commerce Website</title>
</head>
<body>

    <!-- Registration Form -->
    <h2>User Registration</h2>
    <form method="post" action="">
        <!-- Include your registration form fields here -->
        <input type="submit" name="register" value="Register">
    </form>

    <!-- Login Form -->
    <h2>User Login</h2>
    <form method="post" action="">
        <!-- Include your login form fields here -->
        <input type="submit" name="login" value="Login">
    </form>

    <!-- Product Listing -->
    <h2>Product Listing</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <strong><?= $product['name'] ?></strong>
                <p><?= $product['description'] ?></p>
                <p>Price: $<?= $product['price'] ?></p>
                <!-- Include a form to add products to the cart -->
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <input type="number" name="quantity" value="1" min="1">
                    <input type="submit" name="add_to_cart" value="Add to Cart">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
      <h2>View Tables</h2>
    <ul>
        <li><a href="view_table.php?table=bookings">View Bookings</a></li>
        <li><a href="view_table.php?table=contact_messages">View Contact Messages</a></li>
        <li><a href="view_table.php?table=orders">View Orders</a></li>
        <li><a href="view_table.php?table=order_details">View Order Details</a></li>
        <li><a href="view_table.php?table=products">View Products</a></li>
    </ul>
    <!-- Add more sections and forms as needed for your application -->

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
