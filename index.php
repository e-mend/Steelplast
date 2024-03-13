<?php

$routes = [
    '/' => 'View/home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
];

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($url, $routes)) {
    include $routes[$url];
} else {
    http_response_code(404);
    echo '404 Not Found';
}