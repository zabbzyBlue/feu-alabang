<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any values are submitted
    if (!empty($_POST)) {
        // Values are submitted
        echo "<p>Submitted shoe name: " . $_POST['shoe_name'] . "</p>";
        echo "<p>Submitted brand name: " . $_POST['brand_name'] . "</p>";
        echo "<p>Submitted shoe price: " . $_POST['shoe_price'] . "</p>";
        echo "<p>Submitted shoe size: " . $_POST['shoe_size'] . "</p>";
        echo "<p>Submitted image URL: " . $_POST['image_url1'] . "</p>";
        echo "<p>Submitted shoe ID: " . $_POST['shoe_id'] . "</p>";

        // You can further process the submitted values here
    } else {
        // No values are submitted
        echo "No values are submitted.<br>";
    }
} else {
    // Not a POST request
    echo "This is not a POST request.<br>";
}
?>
