<?php

require_once "vendor/autoload.php";
require_once "config.php";
require_once "core/Views.php";
require_once "core/MainContoller.php";
//require_once "views/users/Views.php";
require_once "controllers/Users.php";
require_once "controllers/Main.php";

$routes = explode('/', $_SERVER['REQUEST_URI']);

$controller_name = "Main";
$action_name = 'index';

if (!empty($routes[2])) {
    $controller_name = $routes[3];
}

if (!empty($routes[3])) {
    $action_name = $routes[3];
}
$controller_name = "Main";
$action_name = 'enter';

$filename = "controllers/".($controller_name).".php";

try {
    if (file_exists($filename)) {
        require_once $filename;
    } else {
        throw new Exception("File not found");
    }
    $classname = 'App\\'.ucfirst($controller_name);
    if (class_exists($classname)) {
        $controller = new $classname();


    } else {
        throw new Exception("File found but class not found");
    }
    if (method_exists($controller, $action_name)) {
        $controller->$action_name();
    } else {
        throw new Exception("Method not found");
    }
} catch (Exception $e) {
    require "errors/404.php";
}
