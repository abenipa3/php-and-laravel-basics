<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Declaration of routes
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php',
];

// To handle routing the uri to one of the routes
function routeToController($uri, $routes) {
    // If the array has a key with the given name, it exists
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// Set 404 to default
//Option to abort with the given status code
function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}


routeToController($uri, $routes);