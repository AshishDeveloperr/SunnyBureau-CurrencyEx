<?php
session_start();

$priceData = [
    'GBPbuyPrice' => $_SESSION['GBPbuyPrice'] ?? '',
    'GBPsellPrice' => $_SESSION['GBPsellPrice'] ?? '',
    'USDbuyPrice' => $_SESSION['USDbuyPrice'] ?? '',
    'USDsellPrice' => $_SESSION['USDsellPrice'] ?? '',
    'EURbuyPrice' => $_SESSION['EURbuyPrice'] ?? '',
    'EURsellPrice' => $_SESSION['EURsellPrice'] ?? '',
    'ZARbuyPrice' => $_SESSION['ZARbuyPrice'] ?? '',
    'ZARsellPrice' => $_SESSION['ZARsellPrice'] ?? '',
];

echo json_encode($priceData);
?>
