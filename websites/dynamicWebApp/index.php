<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php',
];

// Set 404 to default
function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

// If the array has a key with the given name, it exists
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort();
}