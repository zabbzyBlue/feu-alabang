<?php

// URL to which the POST request will be sent
$url = 'https://pay.magpie.im/api/v2/sessions';

// JSON payload data
$data = array(
    "billing_address_collection" => 'auto',
    "branding" => array(
        "icon" => "https://img.icons8.com/?size=100&id=23027&format=png&color=000000",
        "logo" => "https://img.icons8.com/?size=100&id=23027&format=png&color=000000",
        "use_logo" => true,
        "primary_color" => "#339af5",
        "secondary_color" => "#0074d4"
    ),
    "cancel_url" => "https://example.com/cancel?ref_id=e900558b-8919-4984-94ca-330bbd26bb11",
    "client_reference_id" => "e900558b-8919-4984-94ca-330bbd26bb11",
    "currency" => "php",
    "customer_email" => "",
    "line_items" => array(
        array(
            "name" => "Keannneee keki",
            "description" => "enge po piso tenchu",
            "quantity" => 1,
            "amount" => 100,
            "currency" => "PHP",
            "image" => "https://example.com/surf-board/custom_board.jpeg"
        )
    ),
    "locale" => "en",
    "metadata" => (object) array(),
    "payment_method_types" => array(
        "paymaya"
    ),
    "shipping_address_collection" => array(
        "allowed_countries" => array("PH")
    ),
    "submit_type" => "pay",
    "success_url" => "https://example.com/success?ref_id=e900558b-8919-4984-94ca-330bbd26bb11"
);

// Convert array data to JSON format
$postData = json_encode($data);

// Set HTTP headers
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/json\r\n" .
                    "Authorization: Basic " . base64_encode("sk_live_aRgT1QmRMiwoc0BBxBOiIG:") . "\r\n",
        'content' => $postData
    )
);

// Create a stream context
$context = stream_context_create($options);

// Send the request
$response = file_get_contents($url, false, $context);

// Check for errors
if ($response === false) {
    echo 'Error: Unable to send request';
} else {
    // Display response
    echo $response;
}

?>
