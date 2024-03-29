<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

error_reporting(0);

if(!isset($_COOKIE["language"])
|| !in_array($_COOKIE["language"], ['pt_BR', 'en_US', 'es_ES', 'fr_FR'])) {
    setcookie("language", "pt_BR", time() + 3600);
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
    '/send' => 'sendEmail.php',
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
$url = strtolower(str_replace('/GIT/Steelplast', '', $url));

if($url === '/send'){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if($data['companyName'] === ''
        || $data['companyPhone'] === ''
        || $data['message'] === ''
        || $data['email'] === ''
        || $data['taxId'] === ''
        || $data['website'] === ''
        || $data['material'] === ''){
            $response = ['success' => false];
            header('Content-Type: application/json');
            echo json_encode($response);
            die();
        }

        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        try {
            $MailerInstance = new PHPMailer(false);

            //Server settings
            $MailerInstance->CharSet = 'UTF-8';
            $MailerInstance->SMTPDebug = false;                      //Enable verbose debug output
            $MailerInstance->isSMTP();                                            //Send using SMTP
            $MailerInstance->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
            $MailerInstance->SMTPAuth   = true;                                   //Enable SMTP authentication
            $MailerInstance->Username   = $_ENV['SMTP_USER'];                     //SMTP username
            $MailerInstance->Password   = $_ENV['SMTP_PASSWORD'];                          //SMTP password
            $MailerInstance->SMTPSecure = false;            //Enable implicit TLS encryption -- 465 PHPMailer::ENCRYPTION_SMTPS
            $MailerInstance->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            $MailerInstance->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ),
            );

            $MailerInstance->setFrom('website@bsteelplast.com', 'SuporteSteelplast');
            $MailerInstance->addAddress('marcelo@bsteelplast.com');
            $MailerInstance->addCC('bianca@bsteelplast.com');

            $MailerInstance->isHTML(true);                                  
            $MailerInstance->ContentType = 'text/html; charset=UTF-8';
            $MailerInstance->Subject = 'Novo cliente!';
        
            // Replace placeholders with actual PHP variable values
            $htmlFile = file_get_contents('View\email\index.html');
            $htmlFile = str_replace('{{companyName}}', $data['companyName'], $htmlFile);
            $htmlFile = str_replace('{{companyPhone}}', $data['companyPhone'], $htmlFile);
            $htmlFile = str_replace('{{message}}', $data['message'], $htmlFile);
            $htmlFile = str_replace('{{email}}', $data['email'], $htmlFile);
            $htmlFile = str_replace('{{taxId}}', $data['taxId'], $htmlFile);
            $htmlFile = str_replace('{{website}}', $data['website'], $htmlFile);
            $htmlFile = str_replace('{{material}}', $data['material'], $htmlFile);
            $htmlFile = str_replace('{{language}}', $_COOKIE["language"], $htmlFile);
        
            //Put modified HTML body
            $MailerInstance->msgHTML($htmlFile);
            $MailerInstance->AltBody = 'Some HTML compatible plain-text alternative content';
        
            $MailerInstance->send();        
            
        } catch (Exception $e) {
            echo $e->errorMessage();
            die();
        }

        $response = ['success' => true, 'data' => $data];
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        header('HTTP/1.1 405 Method Not Allowed');
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Method Not Allowed']);
    }
    
   die();     
}

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