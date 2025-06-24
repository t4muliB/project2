<?php



// define('STORAGE_PATH', __DIR__ . '/../storage');
define('STORAGE_PATH', __DIR__ . '/storage');

require "functions.php";

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/') {
    require 'controllers/home.php';
} else if($uri === '/upload') {
    require 'controllers/upload.php';
}


// $routes = require("routes.php");

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
