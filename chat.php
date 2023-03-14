<?php
session_start();

require_once 'model/funktionen.inc.php';
if (!isset($_SESSION['unique_id'])) {
  header('Location: login.php');
}
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');



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