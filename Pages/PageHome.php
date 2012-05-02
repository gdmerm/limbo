<?php

class PageHome extends LMBPageController {

	public function initialize() {
		$db = Limbo::getDb();
		session_destroy();
		$login = new LoginController();
		$login->setDblink($db);
		if ($login->checkLogin("gdmerm@gmail.com", "agd195")) {
			$login->setUserAsLoggedIn();
		}

		//Protect this page by requiring login
		LoginController::securePage();


		$prodController = new Products();
		$prodController->setDBlink($db);
		$home_config = Limbo::getConfiguration();


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

		//set the view template file
		$db->close();
		TMPLPageController::setTemplateFile("templates/home.php");
	}

}


?>
