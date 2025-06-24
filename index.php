<?php

define('STORAGE_PATH', __DIR__ . '/storage');

require "functions.php";

spl_autoload_register(function($class) {
    require($class . '.php');
});

$router = new Router();

$routes = require "routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);































































// if($uri === '/') {
//     require 'controllers/home.php';
// } else if($uri === '/upload') {
//     require 'controllers/upload.php';
// } else if($uri === '/login') {
//     require 'controllers/login.php';
// } else if(str_starts_with($uri,'/users')) { 
// require 'controllers/users.php';
// }