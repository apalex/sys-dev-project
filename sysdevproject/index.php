<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

$controller = (isset($_GET['controller'])) ? $_GET['controller'] : "Home";

$controllerClassName = ucfirst($controller) . "Controller";
include_once "Controllers/$controllerClassName.php";

$ct = new $controllerClassName();
$ct->route();


?>