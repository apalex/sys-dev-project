<?php
session_start();

function getRandomString($n){
    return bin2hex(random_bytes($n / 2));
}

if(!isset($_SESSION["2FA"])) {
    $code = getRandomString(6);

    $_SESSION['2FA'] = $code;
}

$controller = (isset($_GET['controller'])) ? $_GET['controller'] : "Home";
$language = (isset($_GET["lang"])) ? $_GET["lang"] : "en";

$controllerClassName = ucfirst($controller) . "Controller";
include_once "Controllers/$controllerClassName.php";
include_once "Languages/" . $language . ".php";

$ct = new $controllerClassName();
$ct->route();


?>