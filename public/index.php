<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Laser Wilder';

echo $twig->render('Home/home.html.twig', ['name' => $name]);