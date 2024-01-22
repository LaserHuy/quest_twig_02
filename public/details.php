<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

// Get product name from the URL parameters
$productName = $_GET['productName'] ?? null;


$name = 'Laser Wilder';

echo $twig->render('Items/details.html.twig', ['name' => $name, 'productName' => $productName]);