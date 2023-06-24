<?php
session_start();

// Retrieve the latest price values from the session variables or your data source
$buyPrice = $_SESSION['buyPrice'] ?? 'N/A';
$sellPrice = $_SESSION['sellPrice'] ?? 'N/A';

// Prepare the price data as an associative array or object
$priceData = [
    'buyPrice' => $buyPrice,
    'sellPrice' => $sellPrice
];

// Return the price data as JSON
header('Content-Type: application/json');
echo json_encode($priceData);
?>
