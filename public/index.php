<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/':
        require '../src/view/index.php';
        break;

    default:
        http_response_code(404);
        require '../src/view/Home/404.php';
        break;
}