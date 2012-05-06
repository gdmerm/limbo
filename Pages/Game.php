<?php

class Game extends LMBPageController
{

	public function initialize()
	{
		$db = Limbo::getDb();
		LoginController::getUserInfo();
		TMPLPageController::appendToView("queryString", $_GET);
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

	}
}

?>
