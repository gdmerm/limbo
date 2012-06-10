<?php

class Game extends LMBPageController
{
	public function initialize()
	{
		$db = Limbo::getDb();
		TMPLPageController::setTemplateFile("templates/game.php");

		//sanitize game id from querystring
		if (!isset($_GET["id"])) {
			exit;
		}
		$productid = $_GET["id"];
		$productid = (is_numeric($productid)) ? $productid : "";
		if ($productid === '') {exit;}

		//provide data to view
		$prodController = new Products();
		$prodController->setDBlink($db);
		$product = $prodController->getSingleById($productid);

		TMPLPageController::appendToView("product", $product->getFields());

		//Get genres for top navigation
		$prodController = new Products();
		$prodController->setDBlink($db);
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);

		//append member info if any
		LoginController::getUserInfo();
		if (!User::$isGuest) {
			TMPLPageController::appendToView("member", User::$membership);
		} else {
			TMPLPageController::appendToView("member", null);
		}
	}
}
