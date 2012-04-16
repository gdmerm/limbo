<?php
$db = new mysqli("localhost", "root", "agd195", "limbo");
require_once("../controllers/DBTableController.php");
require_once("../controllers/TMPLPageController.php");
require_once("../controllers/Products.php");
require_once("../models/Product.php");

$prodController = new Products();
$prodController->setDBlink($db);

//Save a Product
/*
$productFields = array(
    "name" => "Secret of the Monkey Island",
    "studio" => 'Sierra',
    "publisher" => "Sierra",
    "languages" => "en",
    "price" => 12.99,
    "releaseDate" => "19920101",
    "rating" => 10,
    "genre" => "Adventure"
);
$productid = $prodController->save($productFields);
$product = $prodController->getSingleById($productid);
//echo $product->jsonize();
*/

//Select a product
//$product = $prodController->getSingleById(2);
//TMPLPageController::appendToView("products", array($product->getFields()));

//Select by genre
$products = $prodController->getByGenre("Adventure");
TMPLPageController::appendToView("queryString", $_GET);
TMPLPageController::appendToView("products", $products);

//Delete  a product
//$prodController->delete(2);

//set the view template file
$db->close();
TMPLPageController::setTemplateFile("../templates/home.php");
//get a copy of the view data
$viewData = TMPLPageController::$viewData;
$viewData = json_encode($viewData);
//finally render our template
TMPLPageController::renderTemplate($viewData);
?>
