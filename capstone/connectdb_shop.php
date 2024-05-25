<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "snkrplnt_capstonedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the database
$sql = "SELECT 
            shoes_id AS shoesid, 
            brand_id AS brandid, 
            image_url AS image, 
            shoes_name AS shoesname, 
            shoes_price AS price, 
            date_listed AS shoesdate, 
            brand_name AS category 
        FROM shoestb";

$result = $conn->query($sql);

$product = array(); // Initialize an empty array to store the fetched data

if ($result->num_rows > 0) {
    // Fetch data row by row
    while ($row = $result->fetch_assoc()) {
        // Push each row as an associative array to the product array
        $product[] = $row;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

// Output the product array as JSON
echo json_encode($product);
?>