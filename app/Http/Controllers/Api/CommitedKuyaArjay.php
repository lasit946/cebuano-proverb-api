<?php
// Set the content type to JSON
header('Content-Type: application/json');

// Create an array of Bisaya quotes
$quotes = [
    "Ang tinuod nga kahulugan sa kalipay, makita sa mga simpleng butang.",
    "Ang matag hagit, usa ka oportunidad sa pagtubo."
];

// Create a response array with status and data
$response = [
    'status' => 'success',
    'data' => $quotes
];

// Output the JSON response
echo json_encode($response);
?>
