<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$response = [
    "status" => "success 200",
    "message" => "Data fetched successfully!"
];

echo json_encode($response);
?>header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// داده‌ها برای آزمایش
$response = [
    "status" => "success 200",
    "message" => "Data fetched successfully!"
];

echo json_encode($response);
?>
