<?php
require_once '../config/config.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'report/index';
$url = explode('/', $url);
$controllerName = ucfirst($url[0]) . 'Controller';
$methodName = isset($url[1]) ? $url[1] : 'index';
$param = isset($url[2]) ? $url[2] : null;

require_once "../controllers/$controllerName.php";
$controller = new $controllerName();
if ($param) {
    $controller->$methodName($param);
} else {
    $controller->$methodName();
}
?>
