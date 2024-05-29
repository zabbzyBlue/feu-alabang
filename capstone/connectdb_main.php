<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "snkrplnt_dbuser";
$password = "snkrplnt_dbpass";
$dbname = "snkrplnt_capstonedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$sql = "SELECT 
            shoes_id AS shoes_id, 
            brand_id AS brand_id, 
            image_url1 AS image, 
            shoes_name AS shoes_name, 
            shoes_price AS shoes_price, 
            date_listed AS date_listed, 
            brand_name AS brand_name 
        FROM shoestb";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $products = [];
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode($products);
} else {
    echo json_encode([]);
}

$conn->close();
?>
