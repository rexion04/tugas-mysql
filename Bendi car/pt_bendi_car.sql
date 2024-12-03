<?php
// koneksi.php

// Database configuration
$servername = "localhost"; // or your server name
$username = "your_db_username"; // replace with your database username
$password = "your_db_password"; // replace with your database password
$dbname = "bendi_car"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = SHA2(?, 256)");
    $stmt->bind_param("ss", $user, $pass);

    // Execute statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // User found, proceed to login (you can redirect or set session here)
        echo "Login successful!";
        // Redirect or set session variables as needed
    } else {
        // User not found or incorrect password
        echo "Invalid username or password.";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>