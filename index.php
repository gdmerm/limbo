<?php
session_start();
include_once("configuration/local.php");
require_once("application/Limbo.php");
require_once("controllers/LMBPageController.php");
require_once("controllers/DBTableController.php");
require_once("controllers/LoginController.php");
require_once("controllers/TMPLPageController.php");
require_once("controllers/Products.php");
require_once("models/Product.php");

//print_r($_GET);
//exit;
$controllerId = $_GET["c"];
$action = $_GET["a"];

//sanitize querystring here

//spawn dispatchers
Limbo::prepareDatabaseLink($local);

$pageConfiguration = parse_ini_file("configuration/home.ini", 1);
Limbo::setConfiguration($pageConfiguration);
require_once("pages/" . $controllerId . ".php");
Limbo::dispatch($controllerId, $action);
TMPLPageController::renderTemplate();

?>