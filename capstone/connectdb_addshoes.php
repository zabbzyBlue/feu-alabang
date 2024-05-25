<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "snkrplnt_capstonedb"; // Your database name

// Get form data
$shoes_id = $_POST['shoes_id'];
$brand_id = $_POST['brand_id'];
$image_url = $_POST['image_url'];
$shoes_name = $_POST['shoes_name'];
$shoes_price = $_POST['shoes_price'];
$brand_name = $_POST['brand_name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$sql = "INSERT INTO shoestb (shoes_id, brand_id, image_url, shoes_name, shoes_price, brand_name)
        VALUES ('$shoes_id', '$brand_id', '$image_url', '$shoes_name', '$shoes_price', '$brand_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    sleep(1.5);
    // Redirect to index.html
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>