<?php

class PageHome extends LMBPageController {

	public function initialize() {
		$db = Limbo::getDb();

		//Protect this page by requiring login
		//LoginController::securePage();
		LoginController::getUserInfo();

		$prodController = new Products();
		$prodController->setDBlink($db);
		$home_config = Limbo::getConfiguration();

		//append querystring to data contract
		TMPLPageController::appendToView("queryString", $_GET);

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

		//Get genres for top navigation
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);

		//Get special offers
		$offers = $prodController->getSpecialOffers();
		TMPLPageController::appendToView('specialOffers', $offers);

		//Get PC Featured Products
		$featured = array(
			"PC" => null,
			"MAC" => null
		);
		$featured["PC"] = $prodController->getFeatured("PC");
		$featured["MAC"] = $prodController->getFeatured("MAC");
		TMPLPageController::appendToView("featured", $featured);

		//append member info if any
		if (!User::$isGuest) {
			TMPLPageController::appendToView("member", User::$membership);
		} else {
			TMPLPageController::appendToView("member", null);
		}

		//set the view template file
		$db->close();
		TMPLPageController::setTemplateFile("templates/home.php");
	}

}


?>
