<?php

$routes = [
    '/' => 'home.php',
    '/metal/bronze' => 'bronze.php',
];

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace('/GIT/Steelplast', '', $url);

if (array_key_exists($url, $routes)) {
    include "View/Base/header.php";
    include "View/".$routes[$url];
    include "View/Base/footer.php";
} else {
    http_response_code(404);
    echo '404 Not Found';
}