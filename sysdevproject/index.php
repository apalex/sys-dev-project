<?php
$controller = (isset($_GET['controller'])) ? $_GET['controller'] : "Home";
$language = (isset($_GET["lang"])) ? $_GET["lang"] : "en";

$controllerClassName = ucfirst($controller) . "Controller";
include_once "Controllers/$controllerClassName.php";
include_once "Languages/" . $language . ".php";

$ct = new $controllerClassName();
$ct->route();


?>