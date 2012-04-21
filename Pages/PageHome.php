<?php
$db = new mysqli("localhost", "root", "", "limbo");
require_once("../controllers/DBTableController.php");
require_once("../controllers/TMPLPageController.php");
require_once("../controllers/Products.php");
require_once("../models/Product.php");

$prodController = new Products();
$prodController->setDBlink($db);
$home_config = parse_ini_file("../configuration/home.ini", 1);



//append querystring to data contract
TMPLPageController::appendToView("queryString", $_GET);

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
/*
$products = $prodController->getByGenre("Adventure");
TMPLPageController::appendToView("queryString", $_GET);
TMPLPageController::appendToView("products", $products);
*/

//Get promoted products
$promoted = array(
    "promo_1" => null,
    "promo_2" => null,
    "promo_3" => null,
    "promo_4" => null
);
$productid = $home_config["Promoted"]["promo_1"];
$product = $prodController->getSingleById($productid);
$promoted["promo_1"] = $product->getFields();

$productid = $home_config["Promoted"]["promo_2"];
$product = $prodController->getSingleById($productid);
$promoted["promo_2"] = $product->getFields();

$productid = $home_config["Promoted"]["promo_3"];
$product = $prodController->getSingleById($productid);
$promoted["promo_3"] = $product->getFields();

$productid = $home_config["Promoted"]["promo_4"];
$product = $prodController->getSingleById($productid);
$promoted["promo_4"] = $product->getFields();

TMPLPageController::appendToView("promoted", $promoted);

//Get PC Featured Products
$featured = array(
    "PC" => null,
    "MAC" => null
);
$featured["PC"] = $prodController->getFeatured("PC");
$featured["MAC"] = $prodController->getFeatured("MAC");
TMPLPageController::appendToView("featured", $featured);


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
