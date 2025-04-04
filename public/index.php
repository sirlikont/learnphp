<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

session_start(
    [
        'cookie_only' => true,
    ]
);

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    array_shift($parts);
    $class = implode('/', $parts);
    require_once "src/$class.php";
});

require 'helpers.php';
require 'routes.php';

$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])) {
        call_user_func($match['action']);
    } else if (is_array($match['action'])) {
        $className = $match['action'][0];
        $methodName = $match['action'][1];
        $controller = new $className();
        $controller->$methodName();
    } else {
        echo 'error';
    }
} else {
    echo '404';
}