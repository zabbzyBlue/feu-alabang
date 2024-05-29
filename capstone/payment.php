<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Required fields
    $requiredFields = ['shoe_name', 'brand_name', 'shoe_price', 'image_url1'];

    // Check if all required fields are set and not empty
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            die('Error: Missing required POST parameter: ' . $field);
        }
    }

    // Retrieve and sanitize the submitted values
    $shoeName = htmlspecialchars($_POST['shoe_name'], ENT_QUOTES, 'UTF-8');
    $brandName = htmlspecialchars($_POST['brand_name'], ENT_QUOTES, 'UTF-8');
    $shoePrice = filter_var($_POST['shoe_price'], FILTER_SANITIZE_NUMBER_INT);
    $imgUrl1= htmlspecialchars($_POST['image_url1'], ENT_QUOTES, 'UTF-8');

    // Ensure price is a valid integer
    if ($shoePrice === false || $shoePrice <= 0) {
        die('Error: Invalid shoe price');
    }

    // Add two zeroes to the shoePrice (e.g., 12000 becomes 1200000)
    $shoePrice = intval($shoePrice);

    // URL to which the POST request will be sent
    $url = 'https://pay.magpie.im/api/v2/sessions';

    // JSON payload data
    $data = [
        "billing_address_collection" => 'auto',
        "branding" => [
            "icon" => "https://img.icons8.com/?size=100&id=23027&format=png&color=000000",
            "logo" => "https://img.icons8.com/?size=100&id=23027&format=png&color=000000",
            "use_logo" => true,
            "primary_color" => "#339af5",
            "secondary_color" => "#0074d4"
        ],
        "cancel_url" => "https://example.com/cancel?ref_id=e900558b-8919-4984-94ca-330bbd26bb11",
        "client_reference_id" => "e900558b-8919-4984-94ca-330bbd26bb11",
        "currency" => "php",
        "customer_email" => "",
        "line_items" => [
            [
                "name" => "$brandName $shoeName",
                "description" => "",
                "quantity" => 1,
                "amount" => $shoePrice,
                "currency" => "PHP",
                "image" => "$imgUrl" // Placeholder image, replace with actual image URL
            ]
        ],
        "locale" => "en",
        "metadata" => new stdClass(),
        "payment_method_types" => ["paymaya"],
        "shipping_address_collection" => [
            "allowed_countries" => ["PH"]
        ],
        "submit_type" => "pay",
        "success_url" => "https://example.com/success?ref_id=e900558b-8919-4984-94ca-330bbd26bb11"
    ];

    // Convert array data to JSON format
    $postData = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

    // Set HTTP headers
    $headers = [
        "Content-Type: application/json",
        "Authorization: Basic " . base64_encode("sk_live_aRgT1QmRMiwoc0BBxBOiIG:")
    ];

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    // Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if ($response === false) {
        die('Error: ' . curl_error($ch));
    }

    // Decode the JSON response
    $responseData = json_decode($response, true);

    // Close cURL session
    curl_close($ch);

    // Check if payment_url exists
    if (isset($responseData['payment_url'])) {
        // Redirect to payment_url
        header("Location: " . $responseData['payment_url']);
        exit;
    } else {
        die('Error: payment_url not found in response');
    }
} else {
    die('Error: Invalid request method');
}

?>
