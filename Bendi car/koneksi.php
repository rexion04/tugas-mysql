<?php
// koneksi.php

// Database configuration
$servername = "127.0.0.1"; // or "localhost"
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "pt_bendi_car"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use 'username' and 'password' as input names in your HTML form
    $user = $_POST['username']; // Corrected field name from HTML form
    $pass = $_POST['password']; // Corrected field name from HTML form

    // Prepare and bind - use placeholders for parameters
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = SHA2(?, 256)");
    
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ss", $user, $pass); // Bind the parameters

    // Execute statement
    if (!$stmt->execute()) {
        die("Execute failed: " . htmlspecialchars($stmt->error));
    }

    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        echo "Login successful!";
        // Redirect or set session variables as needed
        // Example: header("Location: dashboard.php"); exit();
    } else {
        echo "Invalid username or password.";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>