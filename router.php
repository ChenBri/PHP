<?php
$uri = substr($_SERVER["REQUEST_URI"], 12);
$uri = parse_url($uri)["path"];

switch ($uri) {
    case '/home':
        require 'controllers/home-controller.php';
        break;
    case '/about':
        require 'controllers/about-controller.php';
        break;

    case '/contact':
        require 'controllers/contact-controller.php';
        break;
    default:
        require 'controllers/home-controller.php';
        break;
}