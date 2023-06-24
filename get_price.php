<?php
session_start();

$priceData = [
    'GBPbuyPrice' => $_SESSION['GBPbuyPrice'] ?? '',
    'GBPsellPrice' => $_SESSION['GBPsellPrice'] ?? '',
    'USDbuyPrice' => $_SESSION['USDbuyPrice'] ?? '',
    'USDsellPrice' => $_SESSION['USDsellPrice'] ?? '',
];

echo json_encode($priceData);
?>
