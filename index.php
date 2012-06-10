<?php
date_default_timezone_set("Europe/London");
session_start();
include_once("configuration/local.php");
include("configuration/config.php");
require_once("application/Limbo.php");
require_once("controllers/LMBPageController.php");
require_once("controllers/DBTableController.php");
require_once("controllers/LoginController.php");
require_once("controllers/ValidationController.php");
require_once("controllers/TMPLPageController.php");
require_once("controllers/Products.php");
require_once("models/Product.php");
require_once("controllers/UsersController.php");
require_once("controllers/ShoppingCartController.php");
require_once("models/User.php");

$controllerId = strtolower($_GET["c"]);
$action = $_GET["a"];

//sanitize querystring here

//spawn dispatchers
Limbo::prepareDatabaseLink($local);
Limbo::setConfiguration($config);

if ($controllerId == "pagehome") {
	$pageConfiguration = parse_ini_file("configuration/home.ini", 1);
	Limbo::setConfiguration($pageConfiguration);
}

if ($action === '$view' || $action === 'view') {
	require_once("pages/" . $controllerId . ".php");
} else {
	require_once("actions/$controllerId/" . $action . ".php");
}
Limbo::dispatch($controllerId, $action);
//TMPLPageController::renderTemplate();
?>