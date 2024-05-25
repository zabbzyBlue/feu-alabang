<?php
session_start(); // Start the session

// Database connection details
$servername = "localhost";
$dbUsername = "root"; // Replace with your database username
$dbPassword = ""; // Replace with your database password
$dbname = "snkrplnt_capstonedb"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form input values
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// Prepare and execute a SQL statement to retrieve user information
$stmt = $conn->prepare("SELECT * FROM admintb WHERE username = ?");
$stmt->bind_param("s", $inputUsername);
$stmt->execute();
$result = $stmt->get_result();

// Check if a row with the given username exists
if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
    
    // Verify the password (case-insensitive comparison)
    if (password_verify($inputPassword, $row['userpass']) || strtolower($inputPassword) == strtolower($row['userpass'])) {
        // Password is correct, set session variable and redirect to admin page
        $_SESSION['username'] = $row['username'];
        header("Location: adminpage.php");
        exit();
    } else {
        // Debug: Log passwords for troubleshooting
        error_log("Entered password: " . $inputPassword);
        error_log("Stored password: " . $row['userpass']);

        // Invalid password, redirect back to login page with error message
        header("Location: adminlogin.html?error=invalid_password");
        exit();
    }
} else {
    // User not found, redirect back to login page with error message
    header("Location: adminlogin.html?error=user_not_found");
    exit();
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>