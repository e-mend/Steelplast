<?php

error_reporting(0);

if(!isset($_COOKIE["language"])
|| !in_array($_COOKIE["language"], ['pt_BR', 'en_US', 'es_ES', 'fr_FR'])) {
    setcookie("lang", "pt_BR", time() + 3600, "/", "", 0);
}

include 'Translate/' . $_COOKIE["language"] . '.php';

$availableProducts = [
    'steel' => [
        'stainlessSteel',
        'carbon',
        'galvanized',
        'flanges',
    ],
    'metal' => [
        'bronze',
        'copper',
        'aluminum',
        'brass',
    ],
    'plastic' => [
        'teflon',
        'pa6g',
        'pu',
        'celeron',
    ],
    'rubber' => [
        'nbr',
        'geomembrane',
        'silicone',
        'neoprene',
    ]
];

$routes = [
    '/' => 'home.php',
    '/metal/bronze' => 'product.php',
    '/metal/copper' => 'product.php',
    '/metal/aluminum' => 'product.php',
    '/metal/brass' => 'product.php',
    '/steel/stainlesssteel' => 'product.php',
    '/steel/carbon' => 'product.php',
    '/steel/galvanized' => 'product.php',
    '/steel/flanges' => 'product.php',
    '/rubber/geomembrane' => 'product.php',
    '/rubber/nbr' => 'product.php',
    '/rubber/silicone' => 'product.php',
    '/rubber/neoprene' => 'product.php',
    '/plastic/teflon' => 'product.php',
    '/plastic/pa6g' => 'product.php',
    '/plastic/pu' => 'product.php',
    '/plastic/celeron' => 'product.php',
];

$img = [
    'stainlessSteel' => [
        'path' => 'public/images/products/A1B.png',
        'style' => 'transform: scaleX(1);'
    ],
    'carbon' => [
        'path' => 'public/images/products/A2TQ31.jpeg',
        'style' => 'object-fit: cover; transform: scaleX(-1);'
    ],
    'galvanized' => [
        'path' => 'public/images/products/A3B6.jpeg',
        'style' => 'transform: scaleX(-1);'
    ],
    'flanges' => [
        'path' => 'public/images/products/fotosdaflangesdeinox/A46.png',
        'style' => 'transform: scaleX(-1);'
    ],
    'bronze' => [
        'path' => 'public/images/products/M1B.jpeg',
        'style' => 'object-fit: cover;'
    ],
    'copper' => [
        'path' => 'public/images/products/M2R.png',
        'style' => ''
    ],
    'aluminum' => [
        'path' => 'public/images/products/M3R.jpg',
        'style' => ''
    ],
    'brass' => [
        'path' => 'public/images/products/M4C2.png',
        'style' => ''
    ],
    'teflon' => [
        'path' => 'public/images/products/P1R.png',
        'style' => 'object-fit: cover;'
    ],
    'pa6g' => [
        'path' => 'public/images/products/P2R.jpeg',
        'style' => 'object-fit: cover;'
    ],
    'pu' => [
        'path' => 'public/images/products/P3R.png',
        'style' => 'transform: scaleX(-1); object-fit: cover;'
    ],
    'celeron' => [
        'path' => 'public/images/products/P4R.png',
        'style' => 'object-fit: cover; transform: scaleX(-1);'
    ],
    'nbr' => [
        'path' => 'public/images/products/b1.png',
        'style' => 'object-fit: cover;'
    ],
    'geomembrane' => [
        'path' => 'public/images/products/rubber/c4.png',
        'style' => 'transform: scaleX(-1); object-fit: cover;'
    ],
    'silicone' => [
        'path' => 'public/images/products/B2.png',
        'style' => 'object-fit: cover;'
    ],
    'neoprene' => [
        'path' => 'public/images/products/B4.png',
        'style' => 'object-fit: cover; transform: scaleX(-1);'
    ],
];

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = explode('/', $url);
$url = str_replace('/GIT/Steelplast', '', $url);

if (array_key_exists($url, $routes) 
&& ($url === '/'
|| in_array($route[2], $availableProducts[$route[1]]))) {

    $product = $route[2] ?? '';

    include "View/Base/header.php";
    include "View/".$routes[$url];
    include "View/Base/footer.php";
} else {
    header('Location: /');
}