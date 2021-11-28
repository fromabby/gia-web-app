<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '' :
        require __DIR__ . '/home.php';
        break;
    case '/catalogue' :
        require __DIR__ . '/catalogue.php';
        break;
    case '/contactus' :
        require __DIR__ . '/contactus.php';
        break;
    case '/dashboard' :
        require __DIR__ . '/dashboard.php';
        break;
    case '/login' :
        require __DIR__ . '/login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
