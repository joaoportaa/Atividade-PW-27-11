<?php
session_start();
require 'config.php';

$url = $_GET['url'] ?? 'home';
$url = explode('/', $url);

$controller = $url[0] ?? 'home';
$action = $url[1] ?? 'index';
$id = $url[2] ?? null;

$controllerFile = "controllers/" . ucfirst($controller) . "Controller.php";

if(file_exists($controllerFile)) {
    require $controllerFile;
    $controllerClass = ucfirst($controller) . "Controller";
    $controllerObj = new $controllerClass();
    
    if(method_exists($controllerObj, $action)) {
        $controllerObj->$action($id);
    } else {
        echo "404 - Método não encontrado";
    }
} else {
    echo "404 - Página não encontrada";
}