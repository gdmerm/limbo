<?php
$db = new mysqli("localhost", "root", "agd195", "limbo");
require_once("models/Product.php");
require_once("controllers/DBTableController.php");
require_once("controllers/Products.php");

$viewData = array("data" => null);
$prodController = new Products();
$prodController->setDBlink($db);

//Save a Product
/*
$productFields = array(
    "name" => "Sonic the Hedgehog",
    "studio" => 'Team SEGA',
    "publisher" => "SEGA",
    "languages" => "en",
    "price" => 12.99,
    "releaseDate" => "19920101",
    "rating" => 9
);
$productid = $prodController->save($productFields);
$product = $prodController->getSingleById($productid);
//echo $product->jsonize();
*/

//Select a product
$product = $prodController->getSingleById(2);

//Delete  a product
//$prodController->delete(2);

//append product to view data
$viewData["data"]["product"] = $product->getFields();
$viewData = json_encode($viewData);

if (isset($_GET["debug"]) && $_GET["debug"] == "data"){
    echo $viewData;
    exit;
}

include("templates/home.php");

?>
