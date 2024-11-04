<?php
$controller = (isset($_GET['controller'])) ? $_GET['controller'] : "Home";

$controllerClassName = ucfirst($controller) . "Controller";
include_once "Controllers/$controllerClassName.php";

$ct = new $controllerClassName();
$ct->route();


?>