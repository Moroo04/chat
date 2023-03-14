<?php
require_once 'model/funktionen.inc.php';
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');
session_start();

$aktion = $_GET['aktion'] ?? 'alleCN';
$controller = $_GET['controller'] ?? 'ajax';

$controllerName = ucfirst($controller) . 'Controller';

if (class_exists($controllerName)) {
    $requestController = new $controllerName();
    $requestController->run($aktion);
} else {
    $requestController = new AjaxController();
    $requestController->render404();
}

?>

