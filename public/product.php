<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Laser Wilder';
$products = ['guitar', 'bass', 'banjo', 'zither', 'lyre', 'harp'];

echo $twig->render('Items/products.html.twig', ['products' => $products, 'name' => $name]);